var main = function($){
	$('#brewery').change(function(){
		$.get("{{ url('beers')}}",
				{ option: $(this).val() },
				function(data) {
					var bottle = $('#bottle');
					bottle.empty();

					$.each(data, function(index, element) {
						bottle.append("<option value='" + element.bottle_ID + "'>" + element.beer_name + "</option>");
					});
		});
	});
};

$(document).ready(main);