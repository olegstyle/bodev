<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSendRequest;
use App\Mail\ContactMail;
use App\Project;
use App\TechnicalStack;
use App\TechnicalStackGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class AngularController extends Controller
{

    public function index(): View
    {
        $data = [];
        $data['seo_title'] = setting('seo_title.', '');
        $data['seo_keywords'] = setting('seo_keywords.', '');
        $data['seo_description'] = setting('seo_description.', '');
        $data['seo_image'] = '/images/me.jpg';

        return view('angular.main', $data);
    }

    public function getData(): JsonResponse
    {
        $locale = Lang::getLocale();

        return response()->json([
            'locale' => $locale,
            'fullName' => $locale === 'ru' ? 'Олег Борисенко' : 'Oleh Borysenko',
            'email' => setting('email.', 'oleh@bodev.pro'),
            'birthday' => '22.10.1994',
            'birthplace' => $locale === 'ru' ? 'Украина, г. Днипро' : 'Dnipro, Ukraine',
            'skype' => setting('skype.', 'olehstail'),
            'position' => setting('header_title.', 'Software Developer'),
            'subposition' => setting('header_subtitle.', ''),
            'aboutMeLong' => setting('about_me_long_' . $locale . '.', ''),
            'aboutMeShort' => setting('about_me_short_' . $locale . '.', ''),
            'socialLinks' => [
                'vk' => 'https://vk.com/bodev_pro',
                'fb' => 'https://www.facebook.com/bodev.pro',
                'instagram' => 'https://www.instagram.com/olehstail/',
                'linkedin' => 'https://www.linkedin.com/in/bodev/',
            ],
        ]);
    }

    public function getTechGroups(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => TechnicalStackGroup::orderBy('order', 'asc')->get(),
        ]);
    }

    public function getTechStacks(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => TechnicalStack::orderBy('date_start', 'desc')->orderBy('group_id', 'asc')->get(),
        ]);
    }

    public function getProjects(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => Project::with('stacks')->orderBy('date_start', 'desc')->get(),
        ]);
    }

    public function sendMail(ContactSendRequest $request): JsonResponse
    {
        Mail::send(new ContactMail($request->input('name'), $request->input('email'), $request->input('message')));

        return response()->json(['success' => true]);
    }
}
