@extends('adminlte::page')
@section('content')
<div><h6>展示属性值</h6></div>
<table class="table table-striped">
	<tr>
		<td>序号</td>
		<td>属性值</td>
		<td>价值</td>
		<td>所属菜单</td>
		<td>操作</td>
	</tr>
@foreach($values as $v)
 <tr>
	<td>{{ $v->id }}</td>
	<td>{{ $v->attribute_value }}</td>
	<td>{{ $v->attr_price }}</td>
	<td>{{ $v->attr_name }}</td>
	<td><a href="del?id={{$v->bid}}" class="btn btn-default btn-flat">删除此属性值</a></td>	
	</tr>
	@endforeach
</table> 
@stop