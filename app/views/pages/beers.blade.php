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

<!-- 		<h1>Dropdown demo</h1>
		{{ Form::open() }}
		<select id='brewery' name="brewery">
			<option>Select Brewery</option>
			<option value='1'>Stone</option>
			<option value='2'>Stone Brewing Co.</option>
			<option value='3'>New Belgium</option>
		</select>
		<br>
		<select id="bottle" name="bottle">
			<option>Please select brewery first</option>
		</select>
		{{ Form::close(); }} -->

		<p>{{ $bottlesTest }}</p>

		@foreach ($my_breweries as $my_brewerie)

			<li>{{ $my_brewerie->short_name }}</li>

		@endforeach

		<p>{{ $breweriesTest }}</p>

		@foreach ($my_bottles as $my_bottle)

			<li>{{ $my_bottle->beer_name }}</li>

		@endforeach

		<!-- use an if statement first to provide a message if the set is empty -->
		@foreach ($bottles as $bottle)

			<!-- first arg links to the page, second arg is the text for the tag -->
			<li>{{ link_to("/beers/{$bottle->beer_name}", $bottle->beer_name) }}</li>

			<!-- <li>{{ link_to("{$bottle->beer_name}", $bottle->beer_name) }}</li> -->

			<!-- <li>{{ $bottle->beer_name }}</li> -->

		@endforeach


	</div>

@stop