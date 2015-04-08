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

	<div class="container-fluid">
		<div class="row">
			<!-- <div class="col-md-3 col-sm-3 col-xs-2"></div> -->
			<div class="btn-group center" role="group">
				<div class="btn-group btn-group-lg" role="group" id="filter_1">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<span class="selection">Select a filter </span><span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<option value="default">Select a filter </option>
						<option value="beertype">Beer Type </option>
						<option value="brewery">Brewery </option>
						<option value="state">State </option>
						<option value="province">Province </option>
						<option value="country">Country </option>
					</ul>
				</div> <!-- filter_1 -->
				<div class="btn-group btn-group-lg" role="group" id="options_1">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<span class="selection">(choose a filter first) </span><span class="caret"></span>
					</button>
					<ul class="dropdown-menu scrollable-menu" role="menu">
						<option value="default">(choose a filter first) </option>
					</ul>
				</div> <!-- options_1 -->
			</div> <!-- btn-group -->
			<!-- <div class="col-md-3 col-sm-3 col-xs-2"></div> -->
		</div> <!-- row -->
	</div> <!-- container-fluid -->

<!-- END DROPDOWN MENUS -->

	<br /><br />
	<div class="beerwall">
		@foreach ($photos as $photo)
			<img src="resources/bottles/{{ $photo->photo_ID }}.jpg">
		@endforeach
	</div>

@stop