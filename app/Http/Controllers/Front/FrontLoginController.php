<?php
namespace App\Http\Controllers\Front;
/**
 * Created by PhpStorm.
 * User: huwei
 * Date: 2017/4/7
 * Time: 18:25
 */
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class FrontLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest.front');
    }



    
    //加载登录页面
    public function showLoginForm()
    {
        return view('front.login', ['except' => 'logout']);
    }

    /*public function login()
    {

    }*/

    //自定义认证驱动
    protected function guard()
    {
        return Auth::guard('front');
    }

    
}