@extends('adminlte::page')
@section('content')
<p>添加按钮权限</p>
<form action="addbuttons" method="post">
	 {!! csrf_field() !!}
	 <div>
       按钮权限<input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="输入按钮权限">
     </div>
     <div>
     	选择等级
     	<select name="mid">
     <?php
     foreach ($menus as $key => $v) { ?>
    <option value="{{ $v->id }}">{{ $v->text }}</option>
     <?php }  ?>
     </select>
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