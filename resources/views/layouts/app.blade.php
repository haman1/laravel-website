<!DOCTYPE html>
<html>
<head>
	<title>Website Uno</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

	 @include('inc.nav')

	 <div class="container">
	 	@if(Request::is('/'))
	 	@include('inc.showcase')
	 	@endif
	 <div class="row">
	 	<div class="col-md-8 col-lg-8">
      @yield('content')
       </div>
       <div class="col-md-4 col-md-4">
     @include('inc.sidebar')
 </div>
 <footer id="footer" class="text-center">
 	<p>Copyright 2020 &copy; Website Uno</p>
 </footer>
</body>
</html>