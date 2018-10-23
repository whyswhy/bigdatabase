<?php
namespace App\Service;

use Illuminate\Http\Request;
use App\Resource;


class CheckResource{
	public static function res($request)
	{
        $rid = $request->rid;
        $resourceid =  (array)$request->mid; 
        return $data = Resource::add($rid,$resourceid);
	}
	
	
}	