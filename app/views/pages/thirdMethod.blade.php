@extends('layouts.sidebar')
@section('content')
	<h2>All Bottles</h2>
	<br />
	<br />
	<div class="beerwall">

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

@stop