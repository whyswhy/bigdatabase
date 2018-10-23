<?php
namespace App\Service;

use Illuminate\Http\Request;
use App\Admin;
use App\Role;
use App\Resource;
class Checkadmin{
   
   public static function doAdmin(Request $request)
   {
      $data = Admin::doAdmin($request);
      if ($data) {
      	session(['aname'=>$data->aname,'id'=>$data->id]);
      	$id = $data->id;
      	return Role::getroles($id); 	
      } else {
      	return false;
      }
   }

   public static function admin($roles)
   {
       foreach ($roles as $key => $value) {
       foreach ($value as $k => $v) {
       		  $arr[] = $v;
         }
       }
      return Resource::rAuth($arr);
   }

 
}
