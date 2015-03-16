<?php
// Query database to populate dropdown menus:

	switch($buttonGroup) {

		case "type":
			$types = $db->query(
				"SELECT DISTINCT bottle.beer_type
				FROM beerdb.bottle
				ORDER BY bottle.beer_type");
			while($row = $types->fetch(PDO::FETCH_ASSOC)) {
				echo('<li><a href="#" class="beertype">' . $row['beer_type'] . '</a></li>');
			}
			break;

		case "brewery":
			$breweries = $db->query(
				"SELECT DISTINCT brewery.short_name
				FROM beerdb.brewery
				ORDER BY brewery.short_name");
			while($row = $breweries->fetch(PDO::FETCH_ASSOC)) {
				echo('<li><a href="#" class="brewery">' . $row['short_name'] . '</a></li>');
			}
			break;

		case "state":
			$states = $db->query(
				"SELECT DISTINCT brewery.region
				FROM beerdb.brewery
				WHERE brewery.country = 'USA'
				ORDER BY brewery.region");
			while($row = $states->fetch(PDO::FETCH_ASSOC)) {
				echo('<li><a href="#" class="state">' . $row['region'] . '</a></li>');
			}
			break;

		case "province":
			$provinces = $db->query(
				"SELECT DISTINCT brewery.region
				FROM beerdb.brewery
				WHERE brewery.country <> 'USA'
				ORDER BY brewery.region");
			while($row = $provinces->fetch(PDO::FETCH_ASSOC)) {
				echo('<li><a href="#" class="province">' . $row['region'] . '</a></li>');
			}
			break;

		case "country":
			$countries = $db->query(
				"SELECT DISTINCT brewery.country
				FROM beerdb.brewery
				ORDER BY brewery.country");
			while($row = $countries->fetch(PDO::FETCH_ASSOC)) {
				echo('<li><a href="#" class="country">' . $row['country'] . '</a></li>');
			}
			break;
			
		default:
			echo "Something went wrong.";
	}

?>