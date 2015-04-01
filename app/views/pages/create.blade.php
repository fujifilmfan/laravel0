@extends('layouts.project')
@section('content')

	<h1>Add New Bottle</h1>

	<!-- with no parameters, this posts to the current URI -->
	<!-- could specify a url with Form::open(['url' => 'users']) (this is hard coded - not great) -->
	<!-- could also use named routes (look at php artisan routes): -->
	{{ Form::open(['route' => 'bottles.store']) }}
		<div>
			{{ Form:: label('beer_name', 'Beer name: ')}}
			<!-- short way: -->
			{{ Form::Text ('beer_name') }}
			<!-- long way: -->
			<!-- {{ Form::Input('text', 'beer_name') }} -->
		</div>

		<div>
			{{ Form:: label('beer_type', 'Beer type: ')}}
			<!-- instead of hard coding alt text, something like $user->username -->
			<!-- even easier w/ 'form model binding' -->
			{{ Form::Text ('beer_type', 'See beeradvocate.com for a list') }}
		</div>

		<div>
			{{ Form:: label('volume_number', 'Volume number: ')}}
			{{ Form::Text ('volume_number') }}
		</div>

		<div>
			{{ Form:: label('volume_unit', 'Volume unit: ')}}
			{{ Form::Text ('volume_unit') }}
		</div>

		<div>
			{{ Form:: label('alcohol', 'Alcohol content: ')}}
			{{ Form::Text ('alcohol') }}
		</div>

		<div>
			{{ Form:: label('date', 'Date: ')}}
			{{ Form::Text ('date') }}
		</div>

		<div>
			{{ Form:: label('series', 'Series: ')}}
			{{ Form::Text ('series') }}
		</div>

		<div>
			<!-- change default text in parentheses -->
			{{ Form::submit('Add Bottle') }}
		</div>

	{{ Form::close() }}
@stop