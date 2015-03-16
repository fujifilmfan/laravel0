<!DOCTYPE html>
<html lang="en-US">
<head>
	@include('includes.header')
</head>
<body>
	@include('includes.navigation')

	<!-- main content -->
	@yield('content')

	<footer class="row">
		@include('includes.footer')
	</footer>

</body>
</html>