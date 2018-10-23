<?php
namespace App\Service;

use Illuminate\Http\Request;
use App\Attributevalue;
class CheckValue{
   
   public static function data(Request $request)
   {   
   	    $data = [
   	    'attribute_value' => $request->attribute_value,
   	    'aid' => $request->aid,
   	    'attr_price' => $request->attr_price,
   	    ];
        $res =  Attributevalue::new($data);
   	    return $res;      
   }



 
}
