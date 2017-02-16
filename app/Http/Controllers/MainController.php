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

class MainController extends Controller {
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function __invoke() {
        //App::setLocale();

        $now = date_create(date("Y-m-d", time()));
        $techStacks = TechnicalStack::all();
        $projects = Project::all();
        $p2ts = ProjectTechnicalStack::all();

        $techStackList = [];
        foreach ($techStacks as $ts) {
            $techStackList[$ts->id] = $ts->getAttributes();
            if ($ts->level > 3 && $ts->level < 8) {
                $techStackList[$ts->id]['level'] = 'middle';
            } else if ($ts->level <= 3) {
                $techStackList[$ts->id]['level'] = 'low';
            } else {
                $techStackList[$ts->id]['level'] = 'high';
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
            $techStackList[$ts->id]['diff'] = $tDiff;
        }

        $projectsList = [];
        foreach ($projects as &$project) {
            $projectsList[$project->id] = $project->getAttributes();
            $projectsList[$project->id]['stack'] = [];
            foreach ($p2ts as &$ts) {
                if ($ts->project_id == $project->id) {
                    if (!empty($techStackList[$ts->tech_id])) {
                        $projectsList[$project->id]['stack'][] = $techStackList[$ts->tech_id];
                    }
                }
            }
        }
        //var_dump($techStackList);
        //var_dump($projectsList);
        return view('main');
    }
}