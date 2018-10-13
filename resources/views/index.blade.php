@extends('layouts.master')
@section('title','Xiaomi')
@section('content')
		<div class="banner_y center">
			<div class="nav">				
				<ul>
                      @foreach($types as $key => $twoType)
					<li>
					  @foreach($twoType['cates'] as $k => $type)
						<a href="list?types_name={{ $type }}">{{ $type }}</a>
                        @endforeach
						<div class="pop">
							@foreach($twoType['goods'] as $key => $good)
							@if($key%6 == 0)
							<div class="left fl">
							@endif								
								<div>									
									<div class="xuangou_left fl">
										<a href="">
											<div class="img fl"><img src="{{ $good['imgs'] }}" alt=""></div>
											<span class="fl">{{ $good['goods_name'] }}</span>
											<div class="clear"></div>
										</a>
									</div>									 
									<div class="xuangou_right fr"><a href="{{ $good['url'] }}?gid={{ $good['gid'] }}" target="_blank">选购</a></div>
									<div class="clear"></div>
								</div>
							@if(($key+1)%6 == 0)												
							</div>
							@endif
							@endforeach			
							</div>
						</li>
					@endforeach
					</ul>
						</div>
		</div>	

		<div class="sub_banner center">
			<div class="sidebar fl">
				<div class="fl"><a href=""><img src="./image/hjh_01.gif"></a></div>
				<div class="fl"><a href=""><img src="./image/hjh_02.gif"></a></div>
				<div class="fl"><a href=""><img src="./image/hjh_03.gif"></a></div>
				<div class="fl"><a href=""><img src="./image/hjh_04.gif"></a></div>
				<div class="fl"><a href=""><img src="./image/hjh_05.gif"></a></div>
				<div class="fl"><a href=""><img src="./image/hjh_06.gif"></a></div>
				<div class="clear"></div>
			</div>
			<div class="datu fl"><a href=""><img src="./image/hongmi4x.png" alt=""></a></div>
			<div class="datu fl"><a href=""><img src="./image/xiaomi5.jpg" alt=""></a></div>
			<div class="datu fr"><a href=""><img src="./image/pinghengche.jpg" alt=""></a></div>
			<div class="clear"></div>


		</div>
	<!-- end banner -->
	<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
	<!-- start danpin -->
		<div class="danpin center">			
			<div class="biaoti center">小米明星单品</div>		
			<div class="main center">
				@foreach($stargoods as $v)
				<div class="mingxing fl"> 	
					<div class="sub_mingxing"><a href="{{ $v->url }}?gid={{ $good['gid'] }}"><img src="./image/pinpai4.png" alt=""></a></div>
					<div class="pinpai"><a href="">{{ $v->goods_name }}</a></div>
					<div class="youhui">5月9日，下单立减200元</div>
					<div class="jiage">{{ $v->g_price }}</div>
				</div>
				@endforeach
				<div class="clear"></div>
			</div>
			
		</div>
		<div class="peijian w">
			<div class="biaoti center">配件</div>
			<div class="main center">
				<div class="content">
					<div class="remen fl"><a href=""><img src="./image/peijian1.jpg"></a>
					</div>
					<div class="remen fl">
						<div class="xinpin"><span>新品</span></div>
						<div class="tu"><a href=""><img src="./image/peijian2.jpg"></a></div>
						<div class="miaoshu"><a href="">小米6 硅胶保护套</a></div>
						<div class="jiage">49元</div>
						<div class="pingjia">372人评价</div>
						<div class="piao">
							<a href="">
								<span>发货速度很快！很配小米6！</span>
								<span>来至于mi狼牙的评价</span>
							</a>
						</div>
					</div>
					<div class="remen fl">
						<div class="xinpin"><span style="background:#fff"></span></div>
						<div class="tu"><a href=""><img src="./image/peijian3.jpg"></a></div>
						<div class="miaoshu"><a href="">小米手机4c 小米4c 智能</a></div>
						<div class="jiage">29元</div>
						<div class="pingjia">372人评价</div>
					</div>
					<div class="remen fl">
						<div class="xinpin"><span style="background:red">享6折</span></div>
						<div class="tu"><a href=""><img src="./image/peijian4.jpg"></a></div>
						<div class="miaoshu"><a href="">红米NOTE 4X 红米note4X</a></div>
						<div class="jiage">19元</div>
						<div class="pingjia">372人评价</div>
						<div class="piao">
							<a href="">
								<span>发货速度很快！很配小米6！</span>
								<span>来至于mi狼牙的评价</span>
							</a>
						</div>
					</div>
					<div class="remen fl">
						<div class="xinpin"><span style="background:#fff"></span></div>
						<div class="tu"><a href=""><img src="./image/peijian5.jpg"></a></div>
						<div class="miaoshu"><a href="">小米支架式自拍杆</a></div>
						<div class="jiage">89元</div>
						<div class="pingjia">372人评价</div>
						<div class="piao">
							<a href="">
								<span>发货速度很快！很配小米6！</span>
								<span>来至于mi狼牙的评价</span>
							</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="content">
					<div class="remen fl"><a href=""><img src="./image/peijian6.png"></a>
					</div>
					<div class="remen fl">
						<div class="xinpin"><span style="background:#fff"></span></div>
						<div class="tu"><a href=""><img src="./image/peijian7.jpg"></a></div>
						<div class="miaoshu"><a href="">小米指环支架</a></div>
						<div class="jiage">19元</div>
						<div class="pingjia">372人评价</div>
						<div class="piao">
							<a href="">
								<span>发货速度很快！很配小米6！</span>
								<span>来至于mi狼牙的评价</span>
							</a>
						</div>
					</div>
					<div class="remen fl">
						<div class="xinpin"><span style="background:#fff"></span></div>
						<div class="tu"><a href=""><img src="./image/peijian8.jpg"></a></div>
						<div class="miaoshu"><a href="">米家随身风扇</a></div>
						<div class="jiage">19.9元</div>
						<div class="pingjia">372人评价</div>
					</div>
					<div class="remen fl">
						<div class="xinpin"><span style="background:#fff"></span></div>
						<div class="tu"><a href=""><img src="./image/peijian9.jpg"></a></div>
						<div class="miaoshu"><a href="">红米4X 高透软胶保护套</a></div>
						<div class="jiage">59元</div>
						<div class="pingjia">775人评价</div>
					</div>
					<div class="remenlast fr">
						<div class="hongmi"><a href=""><img src="./image/hongmin4.png" alt=""></a></div>
						<div class="liulangengduo"><a href=""><img src="./image/liulangengduo.png" alt=""></a></div>					
					</div>
					<div class="clear"></div>
				</div>				
			</div>
		</div>
	@endsection
