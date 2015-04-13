$(document).ready(function($) {

	$("#findMyWeather").click(function(event) 
	{
		// prevents form submission (default behavior)
		event.preventDefault();

		// hide all of the alerts straight away
		$(".alert").hide();

		// Why didn't this work? (probably needs .val )
		// var city = document.getElementById("#city").value;

		// if (city == "") {
		// 	alert("Please enter a city");
		// }

		if ($("#city").val() != "") 
		{
			var city = $("#city").val();

			$.get( "/weatherScraper", { city: city }, function(data) 
			{
				if (data == 404) 
				{
					$("#fail").fadeIn();
				}
				
				else 
				{
					// alert(data);
					// take alert, set html to value of data, then fade it in; URL bit doesn't work due to city formatting
					// $("#success").html(data + "<br /> <a href='http://www.weather-forecast.com/locations/" + $("#city").val() + "/forecasts/latest'></a>").fadeIn();
					$("#success").html(data).fadeIn();
				}

			});
		}

		else 
		{
			$("#noCity").fadeIn();
		}

	});

});