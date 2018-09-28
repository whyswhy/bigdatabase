<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="/add">
		 @csrf
	名字<input type="text" name="name">
	<input type="submit" name="提交">
</form>
</body>
</html>