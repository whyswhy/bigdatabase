<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="/updo">
		 @csrf
	名字<input type="text" name="name" value="{{ $users[0]->name }}">
	<input type="hidden" name="id" value="{{ $users[0]->id }}">
	<input type="submit" name="提交">
</form>
</body>
</html>