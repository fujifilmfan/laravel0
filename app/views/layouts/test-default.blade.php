<!DOCTYPE html>
<html lang="en-US">
<head>
	@include('includes.test-head')
</head>
<body>
	<div class="container">

		<header class="row">
			@include('includes.test-header')
		</header>

		<div id="main" class="row">
			@yield('content')
		</div>

		<footer class="row">
			@include('includes.test-footer')
		</footer>
		
	</div>
</body>
</html>