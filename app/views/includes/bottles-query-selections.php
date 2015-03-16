<?php

	include "bottles-config.php";

	// Each 'if' function sets a variable to the incoming request value.  
	// If the value is the category name, then the variable is set to "" so that all items show.
	// Otherwise, the list is filtered based on the requested value.

	if ($_GET["type"]){
		$type = $_GET["type"];
		if ($type == "Type"){
			$addType = "";
		}
		else {
			$addType = "AND bottle.beer_type = " . "'" . $type . "'";
		}
	}

	if ($_GET["brewery"]){
		$brewery = $_GET["brewery"];
		if ($brewery == "Brewery"){
			$addBrewery = "";
		}
		else {
			$addBrewery = "AND brewery.short_name = " . "'" . $brewery . "'";
		}
	}

	if ($_GET["state"]){
		$state = $_GET["state"];
		if ($state == "State"){
			$addState = "";
		}
		else {
			$addState = "AND brewery.region = " . "'" . $state . "'";
		}
	}

	if ($_GET["province"]){
		$province = $_GET["province"];
		if ($province == "Province"){
			$addProvince = "";
		}
		else {
			$addProvince = "AND brewery.region = " . "'" . $province . "'";
		}
	}

	if ($_GET["country"]){
		$country = $_GET["country"];
		if ($country == "Country"){
			$addCountry = "";
		}
		else {
			$addCountry = "AND brewery.country = " . "'" . $country . "'";
		}
	}
	
	// This code compares the strings to make sure the data is being stored properly:
	// echo strcmp($selectedValue, "Ale");

	$core = "SELECT bottle.bottle_ID, bottle.beer_name, photo.photo_ID 
		 	FROM beerdb.bottle, beerdb.photo, beerdb.bottlebrewery, beerdb.brewery
		 	WHERE bottle.bottle_ID = photo.bottle_ID 
		 		AND bottle.bottle_ID = bottlebrewery.bottle_ID 
		 		AND bottlebrewery.brewery_ID = brewery.brewery_ID 
		 		AND photo.angle = 'front'";

	$test = $core . " " . $addType . " " . $addBrewery . " " . $addState . " " . $addProvince . " " . $addCountry;

//$photos variable will contain all the rows matching the query statement
	$photos = $db->query($test);
	// echo "addType: " . $addType;
	// echo "core: " . $core;
	// echo "test: " . $test;

//While rows exist in the $photos variable (aka for each row)
	while($row = $photos->fetch(PDO::FETCH_ASSOC)) {
		// header("Content-Type: application/json");
		// echo json_encode($row);
		echo('<img src="resources/bottles/' . $row['photo_ID'] . '.jpg">');
	}
?>