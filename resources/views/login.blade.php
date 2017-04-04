<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<form action="/article" method="post">
{{csrf_field()}}
<input type="email" name="email">Mail

<input type="password" name="password">Password

<input type="submit">

</form>
</body>
	
</html>