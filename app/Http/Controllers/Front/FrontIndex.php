<?php
/**
 * Created by PhpStorm.
 * User: huwei
 * Date: 2017/4/8
 * Time: 10:48
 */

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

class FrontIndex extends Controller
{
    public function __construct()
    {
        $this->middleware('front:front');
    }

    //加载后台首页
    public function admin()
    {
        return view('front.admin');
    }
}