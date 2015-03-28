@foreach ($names as $name)
	<option value="{{ $name->beer_name }}">{{ $name->beer_name }}</option>
@endforeach