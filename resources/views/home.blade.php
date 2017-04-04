<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<a href="auth/login">se connecter</a>


<h1>Les Article du blog</h1>
<a href=""></a><div></div>
@foreach($article as $value)
@if($value->brouillon == "on")

<h3>{{$value->title}}</h3>
<p>{{$value->text}}</p>
@endif
 @endforeach

	
</body>
</html>