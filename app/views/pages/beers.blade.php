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

		<p>Bottle ID: {{ $bottlesTest->bottle_ID }}</p>
		<p>Raw output: {{ $bottlesTest }}</p>
		<p>Breweries associated with bottle {{ $bottlesTest->bottle_ID }}:</p>
		<p>Raw output ($my_breweries): {{ $my_breweries }}</p>
		<p>Raw output (list):</p>
		@foreach ($my_breweries as $my_brewerie)
			<li>{{ $my_brewerie }}</li>
		@endforeach
		<br />
		<p>Just the short names from raw output:</p>
		@foreach ($my_breweries as $my_brewerie)
			<li>{{ $my_brewerie->short_name }}</li>
		@endforeach

		<hr />

		<p>Raw output ($test8s): {{ $test8s }}</p>

		<hr />
		
		<p>Raw output ($test3s): {{ $test3s }}</p>
		<p>Raw output (list):</p>
		@foreach ($test3s as $test3)
			<li>{{ $test3 }}</li>
		@endforeach
		<br />
		<p>Just the short names:</p>
		@foreach ($test3s as $test3)
			<li>{{ $test3->short_name }}</li>
		@endforeach
		<br />

		<hr />

	

		<hr />



		<p>Brewery ID: {{ $breweriesTest->brewery_ID }}</p>
		<p>Raw output: {{ $breweriesTest }}</p>
		<p>Bottles associated with brewery {{ $breweriesTest->brewery_ID }}:<p/>
		@foreach ($my_bottles as $my_bottle)
			<li>{{ $my_bottle->beer_name }}</li>
		@endforeach

		<hr />








		<hr />
		<!-- use an if statement first to provide a message if the set is empty -->
		@foreach ($bottles as $bottle)

			<!-- first arg links to the page, second arg is the text for the tag -->
			<li>{{ link_to("/beers/{$bottle->beer_name}", $bottle->beer_name) }}</li>

			<!-- <li>{{ link_to("{$bottle->beer_name}", $bottle->beer_name) }}</li> -->

			<!-- <li>{{ $bottle->beer_name }}</li> -->

		@endforeach


	</div>

@stop