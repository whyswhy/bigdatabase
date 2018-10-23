<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\service\Checkadmin;

class Role extends Model{

      public  $timestamps = false;

	public static function getroles($id)
	{
       $admins = DB::table("role_admin")->where('aid',$id)->get()->toarray();
       $roles = [];
       foreach ($admins as $key => $v) {
         $roles[] = DB::table('roles')->where('id',$v->rid)->get()->toarray();
       }
      return Checkadmin::admin($roles);
     
	}

      public static function getrole()
      {
            $roles = self::get();
            return $roles; 
      }

      public static function add($request)
      {
            $model = new Role;
            $model->rname = $request->rname;
            $res = $model->save();
            return $res; 
      }

      public static function rdel($id)
      {
           $res = self::where("id",$id)->delete();
           return $res;
      }

      public static function inrole($id,$request)
      {
          $arr = (array)$request->rid;
          foreach ($arr as $key => $v) {
          $data = ['aid'=>$id,'rid'=>$v];
          $res = Db::table('role_admin')->insert($data);
          }
          return $res;
       
      }

   




}