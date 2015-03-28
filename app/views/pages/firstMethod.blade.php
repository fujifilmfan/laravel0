@extends('layouts.sidebar')
@section('content')
	<h2>All Bottles</h2>
	<br />
	<br />
	<div class="beerwall">

		{{ Form::open(['action' => 'PagesController@loadNames']) }}
			<label for="type">Beer Type</label>
			<select name="parent_cat" id="parent_cat">
				@foreach($types as $type)
				<option value="{{ $type->beer_type }}">{{ $type->beer_type }}</option>
				@endforeach
			</select>
			<br /><br />
			<label>Beers</label>
			<select name="sub_cat" id="sub_cat"></select>
		{{ Form::close() }}

	</div>

@stop