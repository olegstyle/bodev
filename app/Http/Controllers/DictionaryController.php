<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 18.01.2017
 * Time: 8:59
 */

namespace App\Http\Controllers;

use App\Models\DictionaryLike;
use App\Models\DictionaryShare;
use App\Models\DictionaryShareRedirect;
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
     * @param int $e_dict
     * @return Response
     */
    public function getLike($appName, $e_dict)
    {
        return response([
            'data' => DictionaryLike::getDict($appName, $e_dict),
        ]);
    }

    /**
     * addLike
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $e_dict
     * @return Response
     */
    public function addLike($appName, $e_dict)
    {
        return response([
            'data' => DictionaryLike::incrementDict($appName, $e_dict),
        ]);
    }

    /**
     * getShare
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $e_dict
     * @return Response
     */
    public function getShare($appName, $e_dict)
    {
        return response([
            'data' => DictionaryShare::getDict($appName, $e_dict),
        ]);
    }

    /**
     * addShare
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $e_dict
     * @return Response
     */
    public function addShare($appName, $e_dict)
    {
        return response([
            'data' => DictionaryShare::incrementDict($appName, $e_dict),
        ]);
    }

    /**
     * show
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $e_dict
     * @return Response
     */
    public function show($appName, $e_dict)
    {
        DictionaryShareRedirect::incrementDict($appName, $e_dict);
        return redirect('https://play.google.com/store/apps/details?id=' . $appName);
    }
}
