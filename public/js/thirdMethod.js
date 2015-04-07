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

		$('#filter_1').change(function()
		{

			var options = $('#options_1');

			if ($(this).val() == 'default')
			{
				var category = '';
				options.empty();
				options.append("<option value='default'>Choose a filter first</option>");
			}
			else
			{
				var category = $(this).val();
				// for troubleshooting
				console.log("category: " + category);

				$.ajax(
				{
					type: 'GET',
					url: 'filterOne',
					data: { category: category, },
					dataType: 'JSON', // dataType to send
					success: function(response)
					{
						// for troubleshooting
						console.log('response: \n' + response);
						
						options.empty();
						if (category == 'beertype')
						{
							category = 'beer type';
						}
						options.append("<option value='" + category + "'>" + "Select your " + category + "</option");
						$.each(response, function(index, element)
						{
							options.append("<option value='" + element + "'>" + element + "</option");
						});
					}
				});
			}
		});

		$('#options_1').change(function()
		{

			var category = $('#filter_1 option:selected').val();
			// for troubleshooting
			console.log("category: " + category);

			if ($(this).val() == 'default')
			{
				var selection = '';
			}
			else
			{
				var selection = $(this).val();
				// for troubleshooting
				console.log("selection: " + selection);

				$.ajax(
				{
					type: 'GET',
					url: 'optionOne',
					data: 
					{
						category: category,
						selection: selection,

					},
					dataType: 'JSON', // dataType to send
					success: function(response)
					{
						// for troubleshooting
						console.log('response: \n' + response);
						
						options.empty();
						options.append("<option value='" + selection + "'>" + "Select your " + selection + "</option");
						$.each(response, function(index, element)
						{
							options.append("<option value='" + element + "'>" + element + "</option");
						});
					}
				});
			}
		});

		$(".dropdown-menu li option").click(function()
			{

				// change dropdown menu labels to selected items
				$(this).parents(".btn-group").find(".selection").text($(this).text());
				
				// based on class of menu item
				var selectedCategory = $(this).attr("class");
				
				// grabs the ID of each dropdown menu, returns an array(?); id[1] returns Brewery, for instance
				var ids = $('.btn').map(function(index)
					{
						return this.id;
					});

				var categories = new Array();

				// grabs the current value of each dropdown menu (not just the one just selected)
				for (i = 0; i < ids.length; i++) 
					{
						var selectors = // jQuery selectors for iterating through dropdown menus
						[
							'#' + ids[i],
							'.selection'
						];

						var dropdowns = // these have to match the dropdown default values
						[
							'Type',
							'Brewery',
							'State',
							'Province',
							'Country',
						];

						// searches a dropdown menu to find the text of the current selection
						var value = $(selectors.join(' ')).text();

						// compares the text of the dropdown to 'dropdowns', sets value to "" if a match is found
						// a match means that the default text still exists on the dropdown and no selection has been made
						if (value.indexOf(dropdowns[i]) > -1) 
							{
								value = "";
							}

						categories[i] = value;

						var selectedBeertype = categories[0];
						var selectedBrewery = categories[1];
						var selectedState = categories[2];
						var selectedProvince = categories[3];
						var selectedCountry = categories[4];

					}

				// for troubleshooting:
				console.log("beertype: " + selectedBeertype);
				console.log("brewery: " + selectedBrewery);
				console.log("state: " + selectedState);
				console.log("province: " + selectedProvince);
				console.log("country: " + selectedCountry);
				console.log("category: " + selectedCategory);

				$.get( "returnPhotos", 
					{
						beertype : selectedBeertype,
						brewery : selectedBrewery,
						state : selectedState,
						province : selectedProvince,
						country : selectedCountry,
						category : selectedCategory
					},
					function(response)  
						{
							console.log ("response: \n" + response);
							$(".beerwall").html(response); // server response
						}
				);
			});
	});




				// // this lagged behind the selections, I think
				// var joinTest = $(selectors.join(' ')).text();
				// console.log("joinTest: " + joinTest);

				// // these select from all of the other dropdowns, too
				// var testBeertype = $('#' + ids[0] + ', .selection').text();
				// var addTest = $firstSelector.add($secondSelector).text();
				// var mergeTest = $.merge($firstSelector, $secondSelector).text();

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

		// // this captures all of the content of all of the dropdowns
		// $(".dropdown-menu li option").click(function()
		// 	{
		// 		// change dropdown menu labels to selected items
		// 		$(this).parents(".btn-group").find(".selection").text($(this).text());

		// 		var selected = $(".dropdown-menu li option").map(function()
		// 			{
		// 			// if(this.value !== "") return this.value;
		// 			if ($(this).text())
		// 				return $(this).text();
		// 			}).get();
		// 		console.log("map test: " + selected);
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

