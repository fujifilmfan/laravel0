@extends('layouts.sidebar')
@section('content')
	<h2>All Bottles</h2>
	<br />
	<br />
	<div>

		{{ Form::open() }}
			<select id="cat" name="category" data-url="{{ url('api/dropdown')}}">
				<option>Select Brewery</option>
				<option value='Stone'>Stone</option>
				<option value='Stone Brewing Co.'>Stone Brewing Co.</option>
				<option value='New Belgium'>New Belgium</option>
				<option value='Abita'>Abita</option>
			</select>
			<br />
			<select id="subcat" name="subcategory">
				<option>Please choose brewery first</option>
			</select>

		{{ Form::close(); }}

	</div>

	<div class="form-group">
		<select id="filter_1" class="form-control">
			<option value="default">Select a filter</option>
			<option value="beertype">Beer Type</option>
			<option value="brewery">Brewery</option>
			<option value="state">State</option>
			<option value="province">Province</option>
			<option value="country">Country</option>
		</select>
		<!-- onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=1;' onblur="this.size=1;" -->
		<select id="options_1" class="form-control">
			<option value="default">Choose a filter first</option>
		</select>
	</div>
<!-- BEGIN DROPDOWN MENUS -->

	<!-- TYPE -->
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="beertype">
			<span class="selection">Type</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu scrollable-menu" role="menu">
				<li><a href="#" class="beertype">Type</a></li>
			<!--Populate dropdown menu from the database; items have the class "beertype" -->
			@foreach ($types as $type)
				<li><option value="{{ $type->beer_type }}" class="beertype">{{ $type->beer_type }}</option></li>
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
				<li><option value="{{ $brewery->short_name }}" class="brewery">{{ $brewery->short_name }}</option></li>
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
				<li><option value="{{ $state->region }}" class="state">{{ $state->region }}</option></li>
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
				<li><option value="{{ $province->region }}" class="province">{{ $province->region }}</option></li>
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
				<li><option value="{{ $country->country }}" class="country">{{ $country->country }}</option></li>
			@endforeach
		</ul>
	</div>

<!-- END DROPDOWN MENUS -->

	<div class="beerwall">


	</div>

@stop


