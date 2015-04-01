// function($) allows the use of concise jQuery code w/o causing conflicts w/ other libraries
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
								});
						});
			});

		$(".dropdown-menu li option").click(function() 
			{
				var selectedBeertype = "";
			    var selectedBrewery = "";
			    var selectedState = "";
			    var selectedProvince = "";
			    var selectedCountry = "";
				
				// change dropdown menu labels to selected items
        		$(this).parents(".btn-group").find(".selection").text($(this).text());
        	
        		var selectedValue = $(this).text();
        		var selectedCategory = $(this).attr("class"); // based on classes of dropdown items; use .prop()?

        		// for troubleshooting:
        		console.log("selectedValue: " + selectedValue);
        		console.log("selectedCategory: " + selectedCategory);

        		switch (selectedCategory) 
        			{
        				case 'beertype':
        				selectedBeertype = selectedValue;
        				break;
			            case 'brewery':
			            selectedBrewery = selectedValue;
			            break;
			            case 'state':
			            selectedState = selectedValue;
			            break;
			            case 'province':
			            selectedProvince = selectedValue;
			            break;
			            case 'country':
			            selectedCountry = selectedValue;
			            break;
        			}

        		// for troubleshooting:
		        console.log("type: " + selectedBeertype);
		        console.log("brewery: " + selectedBrewery);
		        console.log("state: " + selectedState);
		        console.log("province: " + selectedProvince);
		        console.log("country: " + selectedCountry);

		        $.get( "returnPhotos", {
		            category : selectedCategory,
		            beertype : selectedBeertype,
		            brewery : selectedBrewery,
		            state : selectedState,
		            province : selectedProvince,
		            country : selectedCountry
		        },

		            function(response)  {
		                console.log ("response: \n" + response);
		                $(".beerwall").html(response); // server response
		            }
		        );

        	});
	});


		        // $.get("returnPhotos", { type: "get" }, data, 
		        // 	function(response)
		        // 		{
		        // 			// for troubleshooting
		        // 			console.log('response: \n' + response);
		        // 			$(".beerwall").html(response); // server response
		        // 		}
		        // 	);

		        // var data = {
		        // 	category: selectedCategory, 
		        // 	beertype: selectedBeertype,
		        // 	brewery: selectedBrewery,
		        // 	state: selectedState,
		        // 	province: selectedProvince,
		        // 	country: selectedCountry
		        // }

		        // $.ajax({
		        // 	type: "get",
		        // 	url: "returnPhotos",
		        // 	contentType: "application/json; charset=utf-8",
		        // 	// dataType: 'text',
		        // 	processData: false,
		        // 	data: JSON.stringify(data),
		        // 	success: function(response)
		        // 		{
		        // 			// for troubleshooting
		        // 			console.log('response: \n' + response);
		        // 			$(".beerwall").html(response); // server response
		        // 		}
		        // 	});



// 		$('.brewery').change(function()
// 			{
// 				var selection = $(this).val();
// 				console.log(selection);
// 				$.get($(this).data('url'),
// 					{
// 						option: $(this).val()
// 					},
// 					function(data)
// 						{
// 							var type = $('#type');
// 							type.empty();
// 							$.each(data, function(index, element)
// 								{
// 									type.append("<option value='" + element + "'>" + element + "</option>");
// 								});
// 						});
// 			});
// 	}
// );

