<?php
	require_once("../tund5/configGlobal.php");
	$database = "if15_hendval";
	
	
	function getCarData(){
		$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
	
		$stmt = $mysqli->prepare("SELECT id, user_id, number_plate, color from car_plates");
		$stmt->bind_result($id, $user_id_from_database, $number_plate, $color);
		$stmt->execute();
		$row = 1;
		//tee midagi seni kuni saame ab'st ühe rea andmeid
		while($stmt->fetch()){
			//seda siin sees tehakse blabla
			echo $row." ".$user_id_from_database." ".$number_plate." ".$color."<br>";
			//$row = $row + 1;
			//$row += 1;
			$row++;
			
		}
		
		$stmt->close();
		$mysqli->close();
	}
	
	//käivitan funktsiooni
	getCarData();
?>