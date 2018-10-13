<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reg extends Model
{
    public static function checklogin($request)
    {
        $name = $request->username;
        $password = md5($request->password);
        $user = DB::table('regs')->where('username', "$name")->Orwhere('emails', "$name")->Orwhere('tel', "$name")->Where('password', "$password")->first();
        return $user;
    }
    
    public static function reginfo($request)
    {
        $arr = [
               'username'=>$request->username,
               'password'=>md5($request->password),
               'tel'=>$request->tel,
               'emails'=>$request->emails,
           ];
        $id = DB::table('regs')->insertGetId($arr);
        return $id;
    }

    public static function get($id)
    {
        return  $data= Db::table('regs')->where('id', "$id")->first();
    }
}
