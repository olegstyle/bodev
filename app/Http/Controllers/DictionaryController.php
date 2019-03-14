<?php

namespace App\Http\Controllers;

use App\Enums\DictionaryCountType;
use App\Models\DictionaryCounter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class DictionaryController extends Controller
{
    public const GOOGLE_PLAY_BASE_URL = 'https://play.google.com/store/apps/details?id={id}';

    public function getByType(string $appName, string $dict, string $type): JsonResponse
    {
        $type = strtolower($type);
        if (DictionaryCountType::isValid($type)) {
            return response()->json([
                'data' => DictionaryCounter::getDict($appName, (int) $dict, $type),
            ]);
        }

        return response()->json([], JsonResponse::HTTP_BAD_REQUEST);
    }

    public function addByType(string $appName, string $dict, string $type): JsonResponse
    {
        $type = strtolower($type);
        if (DictionaryCountType::isValid($type)) {
            return response()->json([
                'data' => DictionaryCounter::incrementDict($appName, (int) $dict, $type),
            ]);
        }
        return response()->json([], JsonResponse::HTTP_BAD_REQUEST);
    }

    public function show(string $appName, string $dict): RedirectResponse
    {
        DictionaryCounter::incrementDict($appName, (int) $dict, DictionaryCountType::SHARE_REDIRECT);

        return redirect($this->getGoogleUrlForAppName($appName));
    }

    public function privacyPolicy(string $appName): View
    {
        $appNameTranslated = preg_replace('/^dictionary\./i', '', trans('dictionary.' . $appName));

        return view('pages.privacy_policy', [
            'appName' => $appName,
            'appNameTranslated' => $appNameTranslated,
            'googleUrl' => $this->getGoogleUrlForAppName($appName),
        ]);
    }

    public function getGoogleUrlForAppName(string $appName): string
    {
        return str_replace('{id}', $appName, self::GOOGLE_PLAY_BASE_URL);
    }
}
