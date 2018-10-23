<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model{
   

    protected $table = "admins";

    public static function doAdmin($request)
    {
    	$name = $request->email;
        $password = $request->password;
        $user = DB::table('admins')->where('emails', "$name")->Where('apwd', "$password")->Where('isadmin', 1)->first();
        return $user;
    }

    public static function add($request)
    {
    	 $model = new Admin;
    	//dd($request);
    	$model->aname = $request->aname; 
    	$model->emails = $request->emails; 
    	$model->apwd = $request->apwd; 
    	$model->status = $request->status;
    	$model->isadmin = $request->isadmin;
    	$model->create_aid = session('id');
    	// $model->created_at = $request->created_at;
    	// $model->updated_at = $request->updated_at;
        $data = $model->save();
        $id = $model->id;
        return $id;
    	
    }

    public static function show()
    {
    	$admins = DB::table('admins')->get()->toarray();
    	return $admins;
    }

    public static function del($id)
    {
    	$res = self::where("id",$id)->delete();
    	return $res;
    }

}