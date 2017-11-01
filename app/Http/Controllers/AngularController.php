<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 18.01.2017
 * Time: 8:59
 */

namespace App\Http\Controllers;

use App\Http\Requests\ContactSendRequest;
use App\Mail\ContactMail;
use App\Project;
use App\TechnicalStack;
use App\TechnicalStackGroup;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Voyager;

/**
 * Class AngularController
 * @package App\Http\Controllers
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
class AngularController extends Controller {

    /**
     * index
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return Response
     */
    public function index()
    {
    	$data = [];
    	$data['seo_title'] = setting('seo_title.', '');
        $data['seo_keywords'] = setting('seo_keywords.', '');
        $data['seo_description'] = setting('seo_description.', '');
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
            'fullName' => $locale == 'ru' ? 'Олег Борисенко' : 'Oleh Borysenko',
            'email' => setting('email.', 'oleh@bodev.pro'),
            'birthday' => '22.10.1994',
            'birthplace' => $locale == 'ru' ? 'Украина, г. Днипро' : 'Dnipro, Ukraine',
            'skype' => setting('skype.', 'olehstail'),
            'position' => setting('header_title.', 'Software Developer'),
            'subposition' => setting('header_subtitle.', ''),
            'aboutMeLong' => setting('about_me_long_' . $locale . '.', ''),
            'aboutMeShort' => setting('about_me_short_' . $locale . '.', ''),
            'socialLinks' => [
                'vk' => 'https://vk.com/bodev_pro',
                'fb' => 'https://www.facebook.com/bodev.pro',
                'instagram' => 'https://www.instagram.com/olehstail/',
                'linkedin' => 'https://www.linkedin.com/in/bodev/'
            ]

        ]);
    }

    /**
     * getTechGroups
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return Response
     */
    public function getTechGroups() {
        return response([
            'success' => true,
            'data' => TechnicalStackGroup::orderBy('order', 'asc')->get()
        ]);
    }

    /**
     * getTechStacks
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return Response
     */
    public function getTechStacks() {
        return response([
            'success' => true,
            'data' => TechnicalStack::orderBy('date_start', 'desc')->orderBy('group_id', 'asc')->get()
        ]);
    }

    /**
     * getProjects
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return Response
     */
    public function getProjects() {
        return response([
            'success' => true,
            'data' => Project::with('stacks')->orderBy('date_start', 'desc')->get()
        ]);
    }

    /**
     * sendMail
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param ContactSendRequest $request
     * @return Response
     */
    public function sendMail(ContactSendRequest $request)
    {
        Mail::send(new ContactMail($request->input('name'), $request->input('email'), $request->input('message')));
        return response(['success' => true]);
    }
}
