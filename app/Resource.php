<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\service\CheckMenu;

class Resource extends Model{

	public static function rAuth($arr)
	{
		foreach ($arr as $key => $v) {
		$menus[] = Db::table('resources')->where("rid",$v->id)->get()->toarray();
		}
	    session(['menus'=>$menus]);
	    return CheckMenu::Menus($menus);

	}

	public static function add($rid,$resource_id)
	{
		foreach ($resource_id as $key => $v) {
			$res = Db::table('resources')->insert(['rid'=>$rid,'resource_id'=>$v]); 
		}
		return $res;
	}

	public static function del($rid)
	{
		$res = self::where("rid",$rid)->delete(); 
		return $res;
	}









}