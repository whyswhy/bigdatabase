@extends('adminlte::page')
@section('content')
<p>添加商品属性</p>
<form action="addattr" method="post">
	 {!! csrf_field() !!}
	 <div>
       属性名称<input type="text" name="attribute_name" class="form-control" value="{{ old('attribute_name') }}" placeholder="输入属性名称">
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