<?php
namespace App\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Reg;
use App\Jobs\Jobs;

class Checkreg
{
    public static function check($request)
    {
        $data = Reg::reginfo($request);
        if ($data) {
            $user = $request->emails;
            dispatch(new Jobs($user));
            return $data;
        }
    }

    public static function checklogin($request)
    {   
        session(['username' => $request->username]);
        return $data = Reg::checklogin($request);
    }

    public static function get($id)
    {
        return Reg::get($id);
    }

}
