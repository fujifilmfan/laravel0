<!DOCTYPE html>
<html lang="en-US">
<head>
	@include('includes.header')
	{{ HTML::style('css/sidebar.css'); }}
</head>
<body>
	@include('includes.navigation')

	<div class="banner">
		<img src="/resources/P1110300-02-04.jpg">
	</div>

	<div class="container-fluid">
		<div class="row">

		<!-- main content -->
		<div id="main" class="col-xs-9">
			@yield('content')
		</div><!-- /.col-xs-9 -->

		<!-- sidebar content -->
		<div id="sidebar" class="col-xs-3 sidebar">
			@include('includes.sidebar')
		</div><!-- /.col-xs-3 .sidebar -->

		</div><!-- /.row -->
	</div><!-- /.container-fluid -->

	<footer class="row">
		@include('includes.footer')
	</footer>

</body>
</html>