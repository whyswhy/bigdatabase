@extends('adminlte::page')
@section('content')
<div>添加管理员</div>
<form action="addpeople" method="post">
	 {!! csrf_field() !!}
	 <div>
       姓名<input type="text" name="aname" class="form-control" value="{{ old('aname') }}" placeholder="输入管理员姓名">
     </div>
     <div>
       密码<input type="password" name="apwd" class="form-control" value="{{ old('apwd') }}" placeholder="输入管理员密码">
     </div>
     <div>
       邮箱<input type="text" name="emails" class="form-control" value="{{ old('emails') }}" placeholder="输入管理员邮箱">
     </div>
      状态	
      <div>
       冻结<input type="radio" name="status" value="0">
       解冻<input type="radio" name="status" value="1">
      </div>	
      是否是管理员	
      <div>
       不是<input type="radio" name="isadmin" value="0">
       是  <input type="radio" name="isadmin" value="1">
     </div>	
     <div>
     <p><b>为管理员添加角色</b></p>
  <?php
  foreach ($roles as $key => $v) { ?>
  <input type="checkbox" name="rid[]" value="{{$v->id}}">{{$v->rname}}
   <?php }  ?>
     </div>
      @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
     <button type="submit"  class="btn btn-primary">添加</button> 
</form>
    
@stop