<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 18.01.2017
 * Time: 8:59
 */

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
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

    /**
     * getMyData
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return Response
     */
    public function getData()
    {
        $locale = Lang::getLocale();
        return response([
            'locale' => $locale,
            'fullName' => 'Oleh Borysenko',
            'email' => Voyager::setting('email', 'oleh@bodev.pro'),
            'birthday' => '22.10.1994',
            'birthplace' => 'Dnipro, Ukraine',
            'skype' => Voyager::setting('skype', 'olehstail'),
            'position' => Voyager::setting('header_title', 'Software Developer'),
            'subposition' => Voyager::setting('header_subtitle', ''),
            'aboutMeLong' => Voyager::setting('about_me_long_' . $locale, ''),
            'aboutMeShort' => Voyager::setting('about_me_short_' . $locale, ''),

        ]);
    }
}
