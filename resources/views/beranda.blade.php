<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<base href="./">
	@include('inc.bs_4')
	<title>@yield('title')</title> 
</head> 
<body> 	
	@include('inc.menu_navbar')
<br>
<div id="tentang">
	@yield('content')
</div>
	@include('inc.footer')
	@include('inc.bs_4js')
</body> 
</html>