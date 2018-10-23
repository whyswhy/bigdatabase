@extends('adminlte::page')
@section('content')
<div><h6>展示属性</h6></div>
<table class="table table-striped">
	<tr>
		<td>序号</td>
		<td>属性名名字</td>
		<td>操作</td>
	</tr>
@foreach($attr as $v)
    <tr>
	<td>{{ $v->id }}</td>
	<td>{{ $v->attribute_name }}</td>
	<td><a href="del?id={{$v->id}}" class="btn btn-default btn-flat">删除</a></td>	
	</tr>
	@endforeach
</table> 
@stop