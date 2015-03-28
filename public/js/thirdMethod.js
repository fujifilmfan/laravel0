$(document).ready(function($) 
	{
		$('#cat').change(function() 
			{
				var selection = $(this).val();
				console.log(selection);
				$.get($(this).data('url'),
					{
						option: $(this).val()
					},
					function(data) 
						{
							var subcat = $('#subcat');
							subcat.empty();
							$.each(data, function(index, element) 
								{
									subcat.append("<option value='" + element + "'>" + element + "</option>");
								}
							);
						}
				);
			}
		);
	}
);