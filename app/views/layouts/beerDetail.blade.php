<!DOCTYPE html>
<html lang="en-US">
<head>
	@include('includes.header-beerDetail')
</head>
<body>
	@include('includes.navigation')

	<!-- main content -->
	@yield('content')

	<footer class="row">
		@include('includes.footer-beerDetail')
	</footer>

</body>
</html>