<!DOCTYPE html>
<html lang="en-US">
<head>
	@include('includes.header-bottle')
</head>
<body>
	@include('includes.navigation')

	<!-- main content -->
	@yield('content')

	<footer class="row">
		@include('includes.footer-bottle')
	</footer>

</body>
</html>