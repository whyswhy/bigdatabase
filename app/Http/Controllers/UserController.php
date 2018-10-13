<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Extensions\MongoSessionHandler;
use Illuminate\Support\Facades\Session;
use App\service\Checkreg;
use App\Reg;
use App\service\Log;
use App\Jobs\Jobs;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dologin(Request $request)
    {
        $result = Checkreg::checklogin($request);
        $ip = $request->ip();
        $id = $result->id;
        $logresult = Log::loginlog($id,$ip);
        if ($result && $logresult) {
            $id = $request->session()->put('id', $result->id);
            return redirect('index');
        } else {
            return redirect('login');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function addregister(Request $request)
    {
        $reginfo = $request->validate(
             [
        'username' => 'required|unique:regs,username,',
        'password' => 'required',
        'repassword' => ['required','same:password'],
        'tel'=>['required','unique:regs,tel','regex:/^(13|19|17|15)(\d){9}$/'],
        'emails'=>['required','unique:regs,emails','regex:/^[\w]+(@)[\w]+\.[0-9a-zA-Z]{2,3}$/'],
        'captcha' => 'required|captcha',
      ],
        [
            'captcha.required' => trans('validation.required'),
            'captcha.captcha' => trans('validation.captcha'),
      ]
         );
        $id = Checkreg::check($request);
        if ($id) {
            $ip = $request->ip();
            $logresult = Log::loginlog($id,$ip);           
            $id = $request->session()->put('id', $id);
            return redirect('index');
        } else {
            return view('register');
        }
    }

    public function order()
    {
        return view('order');
    }

    public function quitlogin(Request $request)
    {
        $id = $request->session()->forget(['id', 'username']);
        return redirect('index');
    }
  
    public function self_info()
    {
        return view('self_info');
    }
}
