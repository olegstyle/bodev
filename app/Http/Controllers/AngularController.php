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
    	$data = [];
    	$data['seo_title'] = Voyager::setting('title', '');
        $data['seo_keywords'] = Voyager::setting('seo_keywords', '');
        $data['seo_description'] = Voyager::setting('seo_description', '');
        $data['seo_image'] = '/images/me.jpg';
      	return view('angular.main', $data);
    }
}
