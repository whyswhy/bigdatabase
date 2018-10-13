<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Loginlog extends Model
{
   protected $table = 'log_login';

   public static function login($data,$uid)
   {
      $model = new Loginlog;
      $logcount = self::where('uid',$uid)->count();
      if ($logcount == 10) {
      	$res = self::where('uid',$uid)->delete();
      }
      $model->city = $data["city"];
      $model->country = $data["county"];
      $model->isp = $data["isp"];
      $model->uid = $uid;
      return $model->save();
   }
}

?>