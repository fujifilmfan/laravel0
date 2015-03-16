@extends('layouts.sidebar')
@section('content')
	<h2>All Bottles</h2>
	<br />
	<br />
	<div class="beerwall">
		<!-- {{ $bottles }} -->
<!-- 		@foreach ($bottles as $bottle)
			<p>{{ $bottle }}</p>
		@endforeach -->

		@foreach ($bottles as $bottle)

			<li>{{ link_to("{$bottle->beer_name}", $bottle->beer_name) }}</li>

			<!-- <li>{{ link_to("{$bottle->beer_name}", $bottle->beer_name) }}</li> -->

			<!-- <li>{{ $bottle->beer_name }}</li> -->

		@endforeach

	</div>

@stop