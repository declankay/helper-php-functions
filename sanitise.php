<?php

/*------------------------------------*\
	
	Sanitise Data Input
	
	@param string $dataInput The data getting sanitised
	
	@return $dataSanitised The sanitised data		
	
\*------------------------------------*/

function sanitise($dataInput){

	// Set the $con to db login details
	global $con;

	// Convert the HTML, XML or PHP to safe values
    $dataSanitised = strip_tags($dataInput);

    // Add a slash to any quotes, to make the values safe
    $dataSanitised = addslashes($dataSanitised);

    // Escape any special characters for use in the SQL query
    $dataSanitised = mysqli_real_escape_string($con, $dataSanitised);
    
	return $dataSanitised;

}

?>