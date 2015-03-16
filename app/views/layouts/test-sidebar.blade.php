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

		<!-- sidebar content -->
		<div id="sidebar" class="col-md-4">
			@include('includes.test-sidebar')
		</div>

		<!-- main content -->
		<div id="main" class="row">
			@yield('content')
		</div>

		<footer class="row">
			@include('includes.test-footer')
		</footer>
		
	</div>
</body>
</html>