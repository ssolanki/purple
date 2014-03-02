
<?php

function Distance_KM($lat1,$lon1,$lat2,$lon2) {
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $dist = $dist * 60 * 1.1515;
    return ($dist * 1.609344);
}

function confirm_query($result_set){
		if(!$result_set){
						die("Database query fail".mysql_error());
						}
		}

function show_store($type){
	global $db;
		$query = "SELECT * FROM store ";
	//	 WHERE Distance_KM($lat1,$lon1,store.location_lat,store.location_lon) < 10";
	//	if(!strcmp($type,"ALL")) $query.= "WHERE store.type = {$type}";
			
		$query .= " ORDER BY name ASC";
		
		$subject_set = mysql_query($query,$db);
		confirm_query($subject_set);
		$output='<div class="staff"> ';
			$count = 0;
			while ($subject = mysql_fetch_array($subject_set)) {
			$dist = (Distance_KM($_GET['lat'] , $_GET['lon'],($subject["location_lat"]),($subject["location_lon"])));
			if( $dist < 10){
			$output.="<div id=\"info\">".
						"<table> <tr><td id=\"name\"> Store Name : </td> ".
						"<td> " . ($subject["name"]) . " " ."  </td>" . " </tr>"  ;
			$output.="<tr> <td id=\"some_id\"> Type's Name : </td> ".
					"<td> " .($subject["type"]) ."  </td>". " </tr>" ;
			$output.="<tr> <td id=\"some_id\"> City  : </td> ".
					"<td> " . ($subject["city"]) ."  </td>".  " </tr>" ;
			$output.="<tr> <td id=\"some_id\"> Cordinate  : </td> ".
					"<td> " . ($subject["location_lat"]) ." , ". ($subject["location_lon"]). "  </td>".  " </tr>" ;		
				$output.="<tr> <td id=\"some_id\"> Distance  : </td> ".
					"<td> " . (Distance_KM($_GET['lat'] , $_GET['lon'],($subject["location_lat"]),($subject["location_lon"]))) ."  </td>".  " </tr>" ;
					
			$output.=" </div> </br>";
			$count=1;
			}
			}
			if($count==0)	$output .= "No Store around you\n";
		$output.=" </div> ";
		return $output;
	}
	
//echo "\n By php coding ".Distance_KM($_GET['lat'] , $_GET['lon'], 26.510653,80.2297)."\n";
?>
