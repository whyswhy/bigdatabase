@extends('adminlte::page')
@section('content')
<p>添加角色</p>
     <form action="addrole" method="post">
	 {!! csrf_field() !!}
	 <div>
       角色名称<input type="text" name="rname" class="form-control" value="{{ old('rname') }}" placeholder="输入角色">
     </div>
     <button type="submit"  class="btn btn-primary">添加</button> 
     </form>

@stop