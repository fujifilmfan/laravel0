$(document).ready(function($) 
	{
		$('#filter_1').on('click', 'option', function()
		{
			// change dropdown menu labels to selected items unless 'View all bottles ' is selected
			if ($(this).val() == 'default')
			{
				$('#filter_1').find('.selection').text('Select a filter ');
			}
			else
			{
				$('#filter_1').find('.selection').text($(this).text());
			}
			
			// selector for options_1 dropdown menu items
			var options = $('#options_1 ul');
	
			if ($(this).val() == 'default')
			{
				// sets category and selection to 'default'; PHP will send back all photos
				var category = 'default';  
				var selection = 'default';

				// removes data from the button
				$('#filter_1  button').removeData('category');
								
				options.empty();	// options are emptied in preparation for a new filter choice
				// change dropdown menu label from "Select ..." to "(choose ...)"
				options.parents('#options_1').find('.selection').text('(choose a filter first) ');
				options.append('<option value="default">(choose a filter first) </option>');

				requestPhotos(category, selection);
			}
			else
			{
				var category = $(this).val();
				// for troubleshooting
				console.log("category: " + category);
				// attaches data to the button so options_1 listener can get the category
				$('#filter_1 button').data('category', category);

				$.ajax(
				{
					type: 'GET',
					url: 'filterOne',
					data: { category: category, },
					dataType: 'JSON', // dataType to send
					success: function(returnOptions)
					{
						// for troubleshooting
						console.log('returnOptions: \n' + returnOptions);
						
						// change category names for display purposes
						if (category == 'style_specific')
						{
							category = 'specific style';
						}
						else if (category == 'style_general')
						{
							category = 'general style';
						}
						else if (category == 'style_alternative')
						{
							category = 'style';
						}

						// change dropdown menu label from "(choose ...)"" to "Select ..."
						options.parents('#options_1').find('.selection').text('Select a ' + category + ' ');

						// clear menu items
						options.empty();
						// add menu item to allow user to reselect default
						// options.append("<option value='" + category + "'>" + "Select a " + category + "</option");
						// populate menu items from returnOptions
						$.each(returnOptions, function(index, element)
						{
							options.append('<option value="' + element + '">' + element + ' </option');
						});
					}
				});
			}
		});

		$('#options_1').on('click', 'option', function()
		{
			// change dropdown menu labels to selected items              
			$('#options_1').find('.selection').text($(this).text());

			// retrieves stored data on the filter_1 button
			var category = $('#filter_1 button').data('category');
			// for troubleshooting
			console.log("category: " + category);

			var selection = $(this).val();
			// for troubleshooting
			console.log("selection: " + selection);

			requestPhotos(category, selection);
		});

		var requestPhotos = function(category, selection)
		{
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
				success: function(returnPhotos)
				{
					// for troubleshooting
					console.log('returnPhotos: \n' + returnPhotos);

					var beerwall = $('.beerwall');
					beerwall.empty();
					$.each(returnPhotos, function(index, element) 
						{
							beerwall.append('<img src="resources/bottles/' + element + '.jpg">');
						});
				}
			});
		}
	});





 