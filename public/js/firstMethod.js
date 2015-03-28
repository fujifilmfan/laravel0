$(document).ready(function() 
	{
		$('#parent_cat').change(function() 
			{
				// var message = "";
				// var selection = $(this).val();
				// if (selection == "") {
				// 	message = "Value is blank";
				// }
				// console.log(selection);
				// console.log(message);
				$.get('loadNames/' + $(this).val(),
					 function(data) 
						{
							$('#sub_cat').html(data); 
						}
				);
			});
	}
);
