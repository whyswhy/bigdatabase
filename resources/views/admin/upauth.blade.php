@extends('adminlte::page')
@section('content')

<form method="post" action="rauth">
   @csrf
   选择角色
     	<select name="rid">
     <?php
     foreach ($rname as $key => $v) { ?>
    <option value="{{$v->id}}">{{ $v->rname }}</option>
     <?php }  ?>
     </select>
<table class="table table-striped">
	<tr>
		<td>序号</td>
		<td>名字</td>
	</tr>
@foreach($auth as $v)
 <tr>
 	<td>@if($v['pid']==0) 父类:  @else   --  @endif</td>
	<td><input type="checkbox" name="mid[]" value="{{$v['id']}}">{{ $v['text'] }}</td>
	</tr>
	@endforeach
</table>
<button type="submit"  class="btn btn-primary">添加</button> 
   </form>
@stop