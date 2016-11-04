<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<h1>Hello {{$var}}</h1>
	@if($jantina == 'p')
	<h1>Wewiitt</h1>
	@elseif($jantina == 'l')
	<h1>hoi</h1>
	@endif
	<p>	
	@foreach($arr as $var)
	{{$var}}
	@endforeach
	</p>

	repeat antara page -> extend
	repeat dalam page -> include 
</body>
</html>