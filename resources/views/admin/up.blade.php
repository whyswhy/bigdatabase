@extends('adminlte::page')
@section('content')
<p>添加权限</p>
<form action="upmenus" method="post">
	 {!! csrf_field() !!}
	 <div>
       权限名称<input type="text" name="text" class="form-control" value="{{ $menu['text'] }}" placeholder="输入权限">
     </div>
     <div>
       路由:<input type="text" name="url" class="form-control" value="{{ $menu['url'] }}" placeholder="输入路由admin/">
     </div>
     <div>
     	选择等级
     	<select name="pid">
     <option value="0">父类</option>
     <?php
     foreach ($menus as $key => $v) { ?>
    <option value="{{$v->id}}">{{ $v->text }}</option>
     <?php }  ?>
     </select>
     </div>
     <div>
     	是否是菜单
      否<input type="radio" name="is_menu" value="0">
      是<input type="radio" name="is_menu" value="1">
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
<button type="submit"  class="btn btn-primary">修改</button> 
</form>
@stop