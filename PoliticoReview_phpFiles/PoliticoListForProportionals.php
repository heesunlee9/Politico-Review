﻿<?php
	header("Content-Type: text/html; charset=UTF-8");
	$con = mysqli_connect("localhost", "politicoreview", "memetgubler93!", "politicoreview");
mysqli_set_charset($con, "utf8");

	$localProportional = $_GET["localProportional"];
	$politicoParty = $_GET["politicoParty"];

	$result = mysqli_query($con, "SELECT * FROM POLITICO WHERE localProportional = '$localProportional' AND politicoParty 
 = '$politicoParty'");

	$response = array();
	while($row = mysqli_fetch_array($result)) {
		array_push($response, array("politicoID"=>$row[0], 
 "politicoName"=>$row[1], "politicoParty"=>$row[3],  
"localProportional"=>$row[5],"politicoElectionNumber"=>$row[6]));
	}

	echo json_encode(array("response"=>$response), JSON_UNESCAPED_UNICODE);
	mysqli_close($con);
?>