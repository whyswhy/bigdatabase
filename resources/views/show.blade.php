<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach ($users as $v)
    <p>序号: {{ $v->id }}   名字: {{ $v->name }} <a href="del?id={{ $v->id }}">删除</a><a href="up?id={{ $v->id }}">更新</a></p>
@endforeach
</body>
</html>