<?php
namespace App\Service;

use Illuminate\Http\Request;
use App\Loginlog;

class Log
{
   public static function loginlog($id,$ip)
   {

        $uid = $id;
        $ip_json = @file_get_contents("http://ip.taobao.com/service/getIpInfo.php?ip=$ip");
        $ip_arr = json_decode(stripslashes($ip_json),1);
        $data = $ip_arr['data'];
        return Loginlog::login($data,$uid);
    
   }






}
?>