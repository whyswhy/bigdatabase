@extends('adminlte::page')
@section('content')
<div><h6>展示管理员</h6></div>
<table class="table table-striped">
	<tr>
		<td>序号</td>
		<td>名字</td>
		<td>邮箱</td>
		<td>状态</td>
		<td>是否是管理员</td>
		<td>创建时间</td>
		<td>操作</td>
	</tr>
@foreach($admins as $v)
 <tr>
	<td>{{ $v->id }}</td>
	<td>{{ $v->aname }}</td>
	<td>{{ $v->emails }}</td>
	<td>@if($v->status==1) 在线  @else   不在线  @endif</td>
	<td>@if($v->isadmin==1) 是  @else   不是  @endif</td>
	<td>{{ $v->created_at}}</td>
	<td><a href="del?id={{$v->id}}" class="btn btn-default btn-flat">删除</a></td>	
	</tr>
	@endforeach
</table>



 
@stop