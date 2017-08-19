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
        var_dump($type); die();
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
        return redirect('https://play.google.com/store/apps/details?id=' . $appName);
    }
}
