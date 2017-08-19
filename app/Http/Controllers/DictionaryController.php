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

/**
 * Class DictionaryController
 * @package App\Http\Controllers
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
class DictionaryController extends Controller
{

    /**
     * getLike
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @return Response
     */
    public function getLike($appName, $dict)
    {
        return response([
            'data' => DictionaryCounter::getDict($appName, $dict, DictionaryCountTypeEnum::LIKE),
        ]);
    }

    /**
     * addLike
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @return Response
     */
    public function addLike($appName, $dict)
    {
        return response([
            'data' => DictionaryCounter::incrementDict($appName, $dict, DictionaryCountTypeEnum::LIKE),
        ]);
    }

    /**
     * getShare
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @return Response
     */
    public function getShare($appName, $dict)
    {
        return response([
            'data' => DictionaryCounter::getDict($appName, $dict, DictionaryCountTypeEnum::SHARE),
        ]);
    }

    /**
     * addShare
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @return Response
     */
    public function addShare($appName, $dict)
    {
        return response([
            'data' => DictionaryCounter::incrementDict($appName, $dict, DictionaryCountTypeEnum::SHARE),
        ]);
    }

    /**
     * getShow
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @return Response
     */
    public function getShow($appName, $dict)
    {
        return response([
            'data' => DictionaryCounter::getDict($appName, $dict, DictionaryCountTypeEnum::SHOW),
        ]);
    }

    /**
     * addShow
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @return Response
     */
    public function addShow($appName, $dict)
    {
        return response([
            'data' => DictionaryCounter::incrementDict($appName, $dict, DictionaryCountTypeEnum::SHOW),
        ]);
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
        return redirect('https://play.google.com/store/apps/details?id=' . $appName);
    }
}
