@extends('adminlte::page')
@section('content')
<div><h6>展示权限</h6></div>
<table class="table table-striped">
	<tr>
		<td>序号</td>
		<td>名字</td>
		<td>路由</td>
		<td>父类</td>
		<td>是否是菜单</td>
		<td>操作</td>
	</tr>
@foreach($menus as $v)
 <tr>
	<td>{{ $v->id }}</td>
	<td>{{ $v->text }}</td>
	<td>{{ $v->url }}</td>
	<td>{{ $v->pid }}</td>
    <td>@if($v->is_menu==1) 是  @else   不是  @endif</td>
    <td><a href="up?id={{$v->id}}" class="btn btn-default btn-flat">修改</a>
    	<a href="del?id={{$v->id}}" class="btn btn-default btn-flat">删除</a></td>	
	</tr>
	@endforeach
</table>



 
@stop