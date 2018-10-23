@extends('adminlte::page')
@section('content')
<div><h6>展示按钮权限</h6></div>
<table class="table table-striped">
	<tr>
		<td>序号</td>
		<td>名字</td>
		<td>所属菜单</td>
		<td>操作</td>
	</tr>
@foreach($buttons as $v)
 <tr>
	<td>{{ $v->bid }}</td>
	<td>{{ $v->name }}</td>
	<td>{{ $v->mname }}</td>
	<td><a href="del?id={{$v->bid}}" class="btn btn-default btn-flat">删除此按钮</a></td>	
	</tr>
	@endforeach
</table> 
@stop