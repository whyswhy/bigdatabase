<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Extensions\MongoSessionHandler;
use Illuminate\Support\Facades\Session;
use App\service\Checkadmin;
use App\Menu;
use App\Role;
use App\service\CheckMenu;
use App\service\CheckButton;
use App\service\CheckResource;
use App\Resource;
use App\Button;
use App\Attribute;
use App\Attributevalue;
use App\service\CheckValue;


class  AdminController extends Controller
{
    public function login()
    {

         return view('admin/login');
    }

    public function del(Request $request)
    {
      $id = $request->id;
      $data = Admin::del($id);
      if ($data) {
       return redirect('admin/show');
      } else {
        return redirect('admin/show');
      }
    }

    public function rdel(Request $request)
    {
      $id = $request->id;
      $data = Role::rdel($id);
      if ($data) {
       return redirect('admin/roles');
      } else {
        return redirect('admin/roles');
      }
    }

    public function attribute()
    {     
      return view("admin/attribute");
    }

    public function addattr(Request $request)
    {
       $reginfo = $request->validate([
        'attribute_name' => 'required|unique:attributes,attribute_name,',
         ]);
      $arr = Attribute::Add($request->attribute_name);
      if ($arr) {
          return view("admin/showattrs");
      } else {
        return view("admin/attribute");
      }
    }
    
    public function people()
    {     
       $roles = Role::getrole();
       return view('admin/people',['roles'=>$roles]);   
    }

    public function attrvalues()
    {
      $attr = Attribute::show();
      return view("admin/attrvalues",['attr'=>$attr]);
    }

    public function addattrvalue(Request $request)
    {
      $reginfo = $request->validate([
        'attribute_value' => 'required|unique:attribute_values,attribute_value,',
        'attr_price'=>['required','regex:/^[0-9]+$/'],
         ]);
      $res = CheckValue::data($request);
      if ($res) {
        return view("admin/showvalues");
      } else {
        return view("admin/attrvalues");
      }
    }

    public function showvalues()
    {
      $values = Attributevalue::show();
      return view("admin/showvalues",['values'=>$values]);
    }

    public function showattrs()
    {
      $attr = Attribute::show();
      return view("admin/showattrs",['attr'=>$attr]);
    }

    public function role()
    {
      return view("admin/role");
    }

    public function menus()
    {
      $menus = Menu::getMenu();
      return view('admin/menus',['menus'=>$menus]);
    }

    public function addpeople(Request $request)
    {
        $reginfo = $request->validate([
        'aname' => 'required|unique:admins,aname,',
        'apwd' => 'required',
        'status' => 'required',
        'isadmin' => 'required',
        'rid' => 'required',
        'emails'=>['required','unique:admins,emails','regex:/^[\w]+(@)[\w]+\.[0-9a-zA-Z]{2,3}$/'],
         ]);
        $id = Admin::add($request);
        $roles = Role::inrole($id,$request);
        if ($id && $roles) {
        return redirect('admin/show');        
        } else {
        return redirect('admin/people');
         }
    }

    public  function show()
    {
        $admininfo = Admin::show();
        return view('admin/show',['admins'=>$admininfo]);

    }

    public function addrole(Request $request)
    {
         $reginfo = $request->validate([
         'rname' => 'required|unique:roles,rname,',
         ]);
        $data = Role::add($request);
        if ($data) {
          return redirect('admin/roles');
        } else {
          return redirect('admin/role');
        }
       
    }

    public function roles()
    {
          $roles = Role::getrole();
       return view('admin/roles',['roles'=>$roles]);

    }
    
    public function up(Request $request)
    {
      $id = $request->id;
      $menu = Menu::up($id);
      $menus = Menu::getMenu();
      return view("admin/up",['menu'=>$menu,'menus'=>$menus]);
    }

    public function dologin(Request $request)
    {
    	 $reginfo = $request->validate([
        'email' => 'required',
        'password' => 'required',
         ]);
         $data = Checkadmin::doAdmin($request);
         session(['Auth'=>$data]);
         if ($data) {
            return redirect('admin/index'); 
          } else {
            return redirect('admin/login');
          }       
    }

    public function index()
    {
      return view("admin/index");
    }

    public function addmenus(Request $request)
    {
         $reginfo = $request->validate([
        'text' => 'required|unique:menus,text,',
        'pid' => 'required',
        'is_menu' => 'required',
        'url'=>['required','unique:menus,url','regex:/^admin(\/)[a-z]{1,20}$/'],
         ]);
        $id = Menu::New($request);
        if ($id) {
          return redirect('admin/showmenu');
        } else {
        return redirect('admin/menus');
        }
    }

    public function showmenu()
    {
       $menus = Menu::getMenu();
      return view('admin/showmenu',['menus'=>$menus]);
    }

    public function goods()
    {
      return view("admin/goods");
    }
    
    public function upauth()
    {
       $role = Role::getrole();
       $auth = Menu::getauth();  
       return view('admin/upauth',['rname'=>$role,'auth'=>$auth]);
    }

    public function rauth(Request $request)
    {   
        $res = Resource::del($request->rid);
        $data = CheckResource::res($request);
        if ($data && $res) {
           return redirect('admin/upauth');
        } else {
           return redirect('admin/upauth');
        }
                
    }

    public function buttons()
    {
      $menus = Menu::IsMenu();
      return view("admin/buttons",['menus'=>$menus]);
    }

    public function addbuttons(Request $request)
    {
       $reginfo = $request->validate([
        'name' => 'required',
         ]);
       $res = CheckButton::new($request);
       if ($res) {
         return redirect("admin/buttons");
       } else {
        return redirect("admin/showbuttons");
       }
    }

    public function showbuttons()
    {
      $buttons = Button::show();
      return view("admin/showbuttons",["buttons"=>$buttons]);
    }






}






























?>