<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 18.01.2017
 * Time: 8:59
 */

namespace App\Http\Controllers;

use App\Enums\DictionaryCountTypeEnum;
use App\Models\DictionaryCounter;
use Illuminate\Http\Response;
use Illuminate\View\View;

/**
 * Class DictionaryController
 * @package App\Http\Controllers
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
class DictionaryController extends Controller
{
    const GOOGLE_PLAY_BASE_URL = 'https://play.google.com/store/apps/details?id={id}';
    /**
     * getLike
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @param string $type
     * @return Response
     */
    public function getByType($appName, $dict, $type)
    {
        $type = strtolower($type);
        if (DictionaryCountTypeEnum::isValid($type)) {
            return response([
                'data' => DictionaryCounter::getDict($appName, $dict, $type),
            ]);
        }
        return response('', 400);
    }

    /**
     * addLike
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @param string $type
     * @return Response
     */
    public function addByType($appName, $dict, $type)
    {
        $type = strtolower($type);
        if (DictionaryCountTypeEnum::isValid($type)) {
            return response([
                'data' => DictionaryCounter::incrementDict($appName, $dict, $type),

            ]);
        }
        return response('', 400);
    }

    /**
     * show
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @return Response
     */
    public function show($appName, $dict)
    {
        DictionaryCounter::incrementDict($appName, $dict, DictionaryCountTypeEnum::SHARE_REDIRECT);

        return redirect($this->getGoogleUrlForrAppName($appName));
    }

    public function privacyPolicy(string $appName): View
    {
        $appNameTranslated = preg_replace('/^dictionary\./i', '', trans('dictionary.' . $appName));

        return view('pages.privacy_policy', [
            'appName' => $appName,
            'appNameTranslated' => $appNameTranslated,
            'googleUrl' => $this->getGoogleUrlForrAppName($appName),
        ]);
    }

    public function getGoogleUrlForrAppName(string $appName): string
    {
        return str_replace('{id}', $appName, self::GOOGLE_PLAY_BASE_URL);
    }
}
