<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\service\Checkadmin;
use App\Menu;
use App\service\CheckMenu;

class Menu extends Model{

    public  $timestamps = false;
	public static function listMs($button,$menus)
	{
        foreach (array_unique($menus['mid']) as $key => $v) {
        	$menu[] = DB::table('menus')->where('id',$v)->get()->toarray();
        }
        $All['button'] = $button;
        $All['menu'] = $menu;
        return $All;
	}

    public static function getMenu()
    {
        $menus = db::table('menus')->get()->toarray();
        $lastmenus = CheckMenu::getTree($menus,0,0);
        return $menus;
    }

	public static function ListB($menus)
	{
		foreach ($menus['mid'] as $key => $v) {
        	$menu[] = DB::table('menus')->where('id',$v)->get()->toarray();
        }
        $All['menu'] = $menu;
        return $All;

	}

     public static function IsMenu()
    {
        $menus = db::table('menus')->get()->toarray();
        return $menus;
    }

     public static function New($request)
    {
        $model = new Menu;
        $model->text = $request->text;
        $model->url = $request->url;
        $model->pid = $request->pid;
        $model->is_menu = $request->is_menu;
        $res = $model->save();
        $id = $model->id;
        return Menu::Path($id,$request->pid);
    }

   public static function Path($id,$pid)
    {   

        if ($pid == 0) {
            $path = $id;
            $res = self::where("id",$id)->update(['path'=>$path]);
            return $res;
        } else {
           $path = self::where("id",$pid)->first()->toarray();
           $res = self::where("id",$id)->update(['path'=>$path['path']."-".$id]);
           return $res;
        }
    }

    public static function getauth()
    {
        $getauth = Menu::orderBy('path')->get()->toarray();
        return $getauth;
    }

    public static function up($id)
    {
        $menu = self::where("id",$id)->get()->first()->toarray();
        return $menu;
    }

}



?>