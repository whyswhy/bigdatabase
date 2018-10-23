<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Menu;
use App\Button;

class Button extends Model{
     
    protected $primaryKey = 'bid';
	public static function lists($menu)
	{
		$button = [];
		foreach ($menu['bid'] as $key => $v) {

		  $button[] = DB::table('buttons')->where('bid',$v)->get()->toarray();
		}
		return Menu::listMs($button,$menu);
		
	}

	public static function check($name,$mid)
	{
		$result = self::where("mid",$mid)->where("name",$name)->first();
		return $result;
	}

	public static function show()
	{
		$buttons = Button::join('menus','buttons.mid','menus.id')
			->select('buttons.*','menus.text as mname')
			->get();
		return $buttons;
	}
}










?>