<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attribute extends Model{
    
    public $timestamps = false;
    public static function Add($name)
    {
    	$model = new Attribute;
    	$model->attribute_name = $name;  
    	$result = $model->save();
    	return $result;	
    }

    public static function show()
    {
    	$attr = self::get();
    	return $attr;
    }
}