<?php
namespace App\Service;

use Illuminate\Http\Request;
use App\Admin;
use App\Role;
use App\Resource;
use App\Button;
use App\Menu;

class CheckMenu{
	public static function Menus($menus)
	{
	
		$menu = [];
       foreach ($menus as $k => $value) {
       foreach ($value as $key => $v) {
       		if ($v->type_id==1) {
       		$menu['mid'][] = $v->resource_id;

       	} else {
       		$menu['bid'][] = $v->resource_id;
       	}
       	  }    	
       }
      return CheckMenu::ListM($menu); 
	}

	public static function ListM($menu)
	{
		if (isset($menu['bid'])) {
			return Button::lists($menu);
		} else { 
      return Menu::listB($menu);
		}
	}

	public static function getTree($menus,$pid,$step)
	{
		static $tree= [];
		foreach ($menus as $key => $v) {
			if ($v->pid == $pid) {
				$flg = str_repeat('-|', $step);
				$v->text = $flg.$v->text;
				$tree[] = $v;
				CheckMenu::getTree($menus,$v->id,$step+1);
			}
		}
		return $tree;
       
	}

	  public static function make_tree($arr,$parentId=0,$childsKey='submenu')
      {
        $refer = array();
        $tree = array();
        foreach ($arr as $k => $v) {
            $refer[$v['id']] = &$arr[$k]; //创建主键的数组引用
        }
        foreach ($arr as $k => $v) {
            $pid = $v['pid'];  //获取当前分类的父级id
            if ($pid == $parentId) {
                $arr[$k]['icon'] = 'fa fa-list';
                $tree[] = &$arr[$k];  //顶级栏目
            } else {
                if (isset($refer[$pid])) {
                    $refer[$pid][$childsKey][] = &$arr[$k]; //如果存在父级栏目，则添加进父级栏目的子栏目数组中
                }
            }
        }
        return $tree;
       }

	
   
}