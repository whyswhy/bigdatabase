<?php
namespace App\Http\Controllers;

use App\Show;
use App\Name;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function show()
    {
        $users= Name::get();
        return view('show',['users'=>$users]);
    }

    public function add(Request $Request)
    {
    $users=new Name;
    $users->name=$Request->name;
    $res=$users->save();
    return redirect('show');
    }

    public function del(Request $Request)
    {
    $id=$Request->id;
    $flight = Name::find($id);
    $flight->delete($id);
    return redirect('show');      
    }

    public function up(Request $Request)
    {
    $id=$Request->id;
    $users = Name::where('id',$id)->get();
    return view('upid',['users'=>$users]); 
    }

    public function updo(Request $Request)
    {      
    $id=$Request->id;
    $name=$Request->name;
    $users=Name::find($id);
    $users->name = $name;
    $users->save();
    return redirect('show');


    }


 
}