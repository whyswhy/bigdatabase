@extends('layouts.master')
@section('title','列表页')
@section('content')
	<!-- start danpin -->
		<div class="danpin center">			
			<div class="biaoti center">{{ $type_name }}</div>
				@foreach($goodslist as $k => $v)
			<div class="main center">					
				<div class="mingxing fl mb20" style="border:2px solid #fff;width:230px;cursor:pointer;" onmouseout="this.style.border='2px solid #fff'" onmousemove="this.style.border='2px solid red'">
					<div class="sub_mingxing"><a href="indetial?gid={{ $v->id }}"><img src="{{ $v->imgs }}" alt=""></a></div>					
					<div class="pinpai"><a href="indetial?gid={{ $v->gid }}">{{ $v->goods_name }}</a></div>
					<div class="youhui">5.16早10点开售</div>
					<div class="jiage">{{ $v->g_price }}</div>				
				</div>
				@endforeach	
				<div class="clear"></div>
			</div>
		</div>		
                                    @endsection