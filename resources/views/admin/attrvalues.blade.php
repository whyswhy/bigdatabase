@extends('adminlte::page')
@section('content')
<p>添加商品属性</p>
<form action="addattrvalue" method="post">
	 {!! csrf_field() !!}
	 <div>
       属性值<input type="text" name="attribute_value" class="form-control" value="{{ old('attribute_value') }}" placeholder="输入属性名称">
     </div>
        <div>
      选择等级
      <select name="aid">
     <?php
     foreach ($attr as $key => $v) { ?>
    <option value="{{ $v->id }}">{{ $v->attribute_name }}</option>
     <?php }  ?>
     </select>
     </div>
     <div>
       属性价值<input type="text" name="attr_price" class="form-control" value="{{ old('attr_price') }}" placeholder="输入属性价值">
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