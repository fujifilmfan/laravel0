@extends('layouts.project')
@section('content')

	<!-- Introduction -->
	<div class="welcome">
		<div class="welcomecontainer">
			<h1>Kurt's Virtual Beer Wall</h1>
			<p>The ~800 unique bottles displayed on this wall are from 27 countries, 26 states, and about 270 different breweries, 
				but what they all have in common is that I have tried each of them.  I ran out of room to store the bottles, 
				so I decided to photograph and discard them, opting for the virtual wall which had a better chance of becoming a reality.</p>
			<p>Use the dropdowns below to filter the wall and make your own, custom display.</p>
<!-- 				<p>Hover over the bottles for additional information, or click them for additional angles and detail.</p> -->
		</div>
	</div>

<!-- BEGIN DROPDOWN MENUS -->

	<!-- TYPE -->
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="type">
			<span class="selection">Type</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu scrollable-menu" role="menu">
			<li><a href="#" class="beertype">Type</a></li>
			<!--Populate dropdown menu from the database; items have the class "beertype" -->
			@foreach ($types as $type)
				<li><a href="#" class="beertype">{{ $type->beer_type }}</a></li>
			@endforeach
		</ul>
	</div>

	<!-- BREWERY -->
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="brewery">
			<span class="selection">Brewery</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu scrollable-menu" role="menu">
			<li><a href="#" class="brewery">Brewery</a></li>
			<!--Populate dropdown menu from the database; items have the class "brewery" -->
			@foreach ($breweries as $brewery)
				<li><a href="#" class="brewery">{{ $brewery->short_name }}</a></li>
			@endforeach
		</ul>
	</div>

	<!-- STATE -->
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="state">
			<span class="selection">State</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" class="state">State</a></li>
			<!--Populate dropdown menu from the database; items have the class "state" -->
			@foreach ($states as $state)
				<li><a href="#" class="state">{{ $state->region }}</a></li>
			@endforeach
		</ul>
	</div>

	<!-- PROVINCE -->
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="province">
			<span class="selection">Province</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" class="province">Province</a></li>
			<!--Populate dropdown menu from the database; items have the class "province" -->
			@foreach ($provinces as $province)
				<li><a href="#" class="province">{{ $province->region }}</a></li>
			@endforeach
		</ul>
	</div>

	<!-- COUNTRY -->
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="country">
			<span class="selection">Country</span><span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" class="country">Country</a></li>
			<!--Populate dropdown menu from the database; items have the class "country" -->
			@foreach ($countries as $country)
				<li><a href="#" class="country">{{ $country->country }}</a></li>
			@endforeach
		</ul>
	</div>

<!-- END DROPDOWN MENUS -->

	<div class="beerwall">
		@foreach ($photos as $photo)
			<img src="resources/bottles/{{ $photo->photo_ID }}.jpg">
		@endforeach
	</div>

@stop