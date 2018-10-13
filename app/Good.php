<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model{

   public static function notCheap()
   {
   	   $stargood = self::where("g_price",">","1000")->limit(5)->get();
       return $stargood;
   }

   public static function getlist($tid)
   {
       $goods = self::where("tid",$tid)->get();
       return $goods;
   }


}








?>




