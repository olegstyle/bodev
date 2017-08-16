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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Voyager;

class AngularController extends Controller {
    public function index()
    {
      return view('angular.main');
    }
}
