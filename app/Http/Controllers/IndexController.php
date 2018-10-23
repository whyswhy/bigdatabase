<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extensions\MongoSessionHandler;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redis;
use App\service\Checkreg;
use App\Reg;
use App\Type;
use App\Good;


class IndexController extends Controller
{
    public function index(Request $request)
    {
       $types = Type::getType();
       $stargoods = Good::notCheap(); 
     return view('index',['types'=>$types,'stargoods'=>$stargoods]);
    }

    public function shop()
    {
        return view('shop');
    }

    public function list(Request $request)
    {
        $type_name = $request->types_name;
        $goods = Type::getlist($type_name);
        return view('list',['goodslist'=>$goods,'type_name'=>$type_name]);
    }

    public function indetial(Request $request)
    {   

        return view('indetial');
    }

}