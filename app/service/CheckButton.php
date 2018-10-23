<?php
namespace App\Service;

use Illuminate\Http\Request;
use App\Button;


class CheckButton{
	public static function new($request)
	{
		$name = $request->name;
		$mid = $request->mid;
		return Button::check($name,$mid);

	}

}