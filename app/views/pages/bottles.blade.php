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

	<div class="btn-group">
<!--Changed id="beertype" to id="type" on 2014-11-14 - keep an eye out that this didn't break something-->
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="type">
			<span class="selection">Type</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu scrollable-menu" role="menu">
			<li><a href="#" class="beertype">Type</a></li>
<!--Populate dropdown menu from the database; items have the class "beertype" -->
<!-- 			<?php 
				// $buttonGroup = "type";
				// include "includes/bottles-pageload-dd-all.php";
			?> -->
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="brewery">
			<span class="selection">Brewery</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu scrollable-menu" role="menu">
			<li><a href="#" class="brewery">Brewery</a></li>
<!--Populate dropdown menu from the database; items have the class "brewery" -->
<!-- 			<?php 
				// $buttonGroup = "brewery";
				// include "includes/bottles-pageload-dd-all.php";
			?> -->
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="state">
			<span class="selection">State</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" class="state">State</a></li>
<!--Populate dropdown menu from the database; items have the class "state" -->
<!-- 			<?php 
				// $buttonGroup = "state";
				// include "includes/bottles-pageload-dd-all.php";
			?> -->
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="province">
			<span class="selection">Province</span> <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" class="province">Province</a></li>
<!--Populate dropdown menu from the database; items have the class "province" -->
<!-- 			<?php 
				// $buttonGroup = "province";
				// include "includes/bottles-pageload-dd-all.php";
			?> -->
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="country">
			<span class="selection">Country</span><span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" class="country">Country</a></li>
<!--Populate dropdown menu from the database; items have the class "country" -->
<!-- 			<?php 
				// $buttonGroup = "country";
				// include "includes/bottles-pageload-dd-all.php";
			?> -->
		</ul>
	</div>

	<div class="beerwall">
<!-- 		<?php
			// include "includes/bottles-query-selections.php";
		?> -->
	</div>

@stop