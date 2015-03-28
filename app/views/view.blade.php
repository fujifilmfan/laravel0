<h1>Dropdown demo</h1>
	{{ Form::open() }}
		<select id='Brewery' name="Brewery">
			<option>Select Brewery</option>
			<option value='1'>Stone</option>
			<option value='2'>Stone Brewing Co.</option>
			<option value='3'>New Belgium</option>
		</select>
		<br>
		<select id="Bottle" name="Bottle">
			<option>Please select brewery first</option>
		</select>
	{{ Form::close(); }}