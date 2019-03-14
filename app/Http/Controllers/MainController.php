<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectTechnicalStack;
use App\TechnicalStack;
use App\TechnicalStackGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller {

    public function index()
    {
        $locale = Lang::getLocale();
        $imageStorage = '/storage/';
        $data = [];

        $techStacks = TechnicalStack::orderByDesc('date_start')->orderBy('group_id')->get();
        $projects = Project::orderBy('date_start', 'desc')->get();
        $p2ts = ProjectTechnicalStack::all();

        $techStackList = [];
        foreach ($techStacks as $ts) {
            $techStackList[$ts->id] = [
                'id' => $ts->id,
                'group_id' => $ts->group_id,
                'name' => $ts->name,
                'image_url' => $imageStorage . $ts->image_url,
                'date_start' => $ts->date_start,
                'level' => $this->getStackLevel($ts),
                'start' => $this->getDiffDate($ts->date_start),
            ];
        }

        $projectsList = [];
        foreach ($projects as $project) {
            $projectsList[$project->id] = [
                'id' => $project->id,
                'name' => $project->{'name_'.$locale},
                'gist' => $project->{'gist_'.$locale},
                'description' => $project->{'description_'.$locale},
                'image_url' => $imageStorage . $project->image_url,
                'date_start' => $project->date_start,
                'date_end' => $project->date_end,
                'link' => $project->link,
                'stack' => [],
                'groups' => [],
            ];
            foreach ($p2ts as $ts) {
                if (($ts->project_id === $project->id) && !empty($techStackList[$ts->tech_id])) {
                    $projectsList[$project->id]['stack'][$ts->tech_id] = $techStackList[$ts->tech_id];
                    $projectsList[$project->id]['groups'][$ts->tech_id] = $ts->tech_id;
                }
            }
            $this->orderStack($projectsList[$project->id]['stack']);
        }

        $data['tech_groups'] = TechnicalStackGroup::orderBy('order')->get()->keyBy('id');
        $data['tech_stacks'] = $techStackList;
        $data['projects'] = $projectsList;
        $data['about_me_long'] = setting('about_me_long_' . $locale . '.');
        $data['about_me_short'] = setting('about_me_short_' . $locale . '.');
        $data['email'] = setting('email.');
        $data['skype'] = setting('skype.');
        $data['locale'] = $locale;
        $data['seo_title'] = setting('seo_title.');
        $data['seo_keywords'] = setting('seo_keywords.');
        $data['seo_description'] = setting('seo_description.');
        $data['seo_image'] = '/images/me.jpg';

        return view('main', $data);
    }

    public function sendMail(Request $request) {
        $data = array(
            'name' => $request->input('name', ''),
            'email' => $request->input('email', ''),
            'bodyMessage' => $request->input('message', ''),
        );
        if (empty($data['name']) || empty($data['email']) || empty($data['bodyMessage'])) {
            return response('', 400);
        }

        Mail::send('mail', $data, function($message) {
            $message->from('no-reply@bodev.pro', 'BODev.PRO');
            $message->to('olegstyle1@gmail.com', 'Borisenko Oleg')->subject
            ('New message at BODev.PRO');
        });

        return response()->json([], JsonResponse::HTTP_OK);
    }

    private function orderStack(array &$stack): void
    {
        usort($stack, function($a, $b) {
            if (!isset($a['group_id'], $b['group_id'])) {
                return 0;
            }
            if ($a['group_id'] === $b['group_id']) {
                return $a['group_id'] < $b['group_id'] ? -1 : 1;
            }
            if ($a['date_start'] === $b['date_start']) {
                return 0;
            }

            return $a['date_start'] < $b['date_start'] ? -1 : 1;
        });
    }

    private function getDiffDate(string $dateStart): string
    {
        $start = date_create($dateStart);
        $diff = date_diff($start, date_create(date('Y-m-d')));
        $textDiff = '';
        if ($diff->y > 0) {
            $textDiff .= $diff->y;
            $textDiff .= ' year';
            if ($diff->y > 1) {
                $textDiff .= 's ';
            } else {
                $textDiff .= ' ';
            }
        }
        $textDiff .= '<br>';
        if ($diff->m <= 0) {
            $diff->m = 1;
        }
        $textDiff .= $diff->m;
        $textDiff .= ' month';
        if ($diff->m > 1) {
            $textDiff .= 's';
        }

        return $textDiff;
    }

    private function getStackLevel(TechnicalStack $stack): string
    {
        switch (true) {
            case $stack->level >= 5:
                return 'strong';
            case $stack->level === 4:
                return 'very good';
            case $stack->level === 3:
                return 'good';
            case $stack->level === 2:
                return 'not bad';
            default:
                return 'bad';
        }
    }
}
