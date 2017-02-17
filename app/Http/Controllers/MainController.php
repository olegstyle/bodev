<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 18.01.2017
 * Time: 8:59
 */

namespace App\Http\Controllers;


use App\Project;
use App\ProjectTechnicalStack;
use App\TechnicalStack;
use App\TechnicalStackGroup;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use TCG\Voyager\Voyager;

class MainController extends Controller {
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function __invoke() {
        $locale = strtolower('ru');
        Lang::setLocale($locale);
        $imageStorage = '/storage/';

        $data = [];

        $now = date_create(date("Y-m-d", time()));
        $techGroup = TechnicalStackGroup::orderBy('order', 'asc')->get();
        $techStacks = TechnicalStack::all();
        $projects = Project::all();
        $p2ts = ProjectTechnicalStack::all();


        $techGroupList = [];
        foreach ($techGroup as $tg) {
            $techGroupList[$tg->id] = $tg->name;
        }


        $techStackList = [];
        foreach ($techStacks as $ts) {
            $techStackList[$ts->id] = [
                'id' => $ts->id,
                'group_id' => $ts->group_id,
                'name' => $ts->name,
                'image_url' => $imageStorage . $ts->image_url
            ];
            if ($ts->level >= 5) {
                $techStackList[$ts->id]['level'] = 'strong';
            } else if ($ts->level == 4) {
                $techStackList[$ts->id]['level'] = 'very good';
            } else if ($ts->level == 3) {
                $techStackList[$ts->id]['level'] = 'good';
            } else if ($ts->level == 2) {
                $techStackList[$ts->id]['level'] = 'not bad';
            } else {
                $techStackList[$ts->id]['level'] = 'bad';
            }
            $start = date_create($ts->date_start);
            $diff = date_diff($start, $now);
            $tDiff = '';
            if ($diff->y > 0) {
                $tDiff .= $diff->y;
                $tDiff .= ' year';
                if ($diff->y > 1) {
                    $tDiff .= 's ';
                } else {
                    $tDiff .= ' ';
                }
            }
            if ($diff->m > 0) {
                $tDiff .= $diff->m;
                $tDiff .= ' month';
                if ($diff->y > 1) {
                    $tDiff .= 's';
                }
            }
            $techStackList[$ts->id]['start'] = $tDiff;
        }


        $projectsList = [];
        foreach ($projects as &$project) {
            $projectsList[$project->id] = [
                'id' => $project->id,
                'name' => $project->{'name_'.$locale},
                'gist' => $project->{'gist_'.$locale},
                'description' => $project->{'description_'.$locale},
                'image_url' => $project->image_url,
                'date_start' => $project->date_start,
                'date_end' => $project->date_end,
                'link' => $project->link
            ];
            $projectsList[$project->id]['stack'] = [];
            foreach ($p2ts as &$ts) {
                if ($ts->project_id == $project->id) {
                    if (!empty($techStackList[$ts->tech_id])) {
                        $projectsList[$project->id]['stack'][] = $techStackList[$ts->tech_id];
                    }
                }
            }
        }

        $data['about_me_long'] = Voyager::setting('about_me_long_' . $locale, '');
        $data['about_me_short'] = Voyager::setting('about_me_short_' . $locale, '');
        $data['email'] = Voyager::setting('email', '');
        $data['skype'] = Voyager::setting('skype', '');

        return view('main', $data);
    }
}