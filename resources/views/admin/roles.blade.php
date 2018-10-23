@extends('adminlte::page')
@section('content')
<div><h6>展示角色</h6></div>
<table class="table table-striped">
	<tr>
		<td>序号</td>
		<td>名字</td>
		<td>操作</td>
	</tr>
    @foreach($roles as $v)
    <tr>
	<td>{{ $v->id }}</td>
	<td>{{ $v->rname }}</td>
	<td><a href="rdel?id={{$v->id}}" class="btn btn-default btn-flat">删除</a></td>		
	</tr>
	@endforeach
</table>


@stop