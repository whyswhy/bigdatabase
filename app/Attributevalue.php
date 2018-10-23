<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attributevalue extends Model{
          
      protected $table = "attribute_values";
      public $timestamps = false;

    public static function new($data)
    {
          $res =Db::table("attribute_values")->insert($data);
          return $res;
    }

    public static function show()
    {
    	$attrs = Attributevalue::join('attributes','attribute_values.aid','attributes.id')
			->select('attribute_values.*','attributes.attribute_name as attr_name')
			->get();
		return $attrs;
    }




}