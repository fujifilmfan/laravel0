@extends('layouts.project')
@section('content')

	<div class="container-fluid main">
		<div class="row main">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="weatherWindow">

					<h1>Weather Forecast</h1>

					<p class="lead"> Enter a city below to get a forecast, and click submit.</p>

					<form method="post">
						<div class="form-group">
							<label for="city"></label>
							<input type="text" name="city" placeholder="E.g. Los Angeles, London, Shanghai" id="city" class="form-control" value="" />
						</div>
						<!-- <input name="submit" type="submit" class="btn btn-success btn-lg" value="Submit" /> -->
						<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
					</form>

					<div id="success" class="alert"></div>
					<div id="fail" class="alert alert-danger">Could not find weather data for that city.  Please try again.</div>
					<div id="noCity" class="alert alert-danger">Please enter a city.</div>

				 </div> <!-- weatherWindow -->
			</div> <!-- col-sm-6 col-sm-offset-3 -->
		</div> <!-- row -->
	</div> <!-- container-fluid -->

@stop