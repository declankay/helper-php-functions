<?php

/*------------------------------------*\
	
	If Form Submitted
	
	@return boolean		
	
\*------------------------------------*/

function isFormSubmitted(){

	// If the form is submitted
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		return true;

	}

	return false;

}

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

/*------------------------------------*\
	
	SEO Friendly String
	
	@param string $seoUnfriendlyString The original string
	
	@return $seoFriendlyString The formatted string			
	
\*------------------------------------*/

function seoFriendly($seoUnfriendlyString){

	$seoFriendlyString = str_replace(' ', '-', strtolower($seoUnfriendlyString));
	return $seoFriendlyString;

}

/*------------------------------------*\
	
	SEO Unfriendly String
	
	@param string $seoFriendlyString The original string
	
	@return $seoUnfriendlyString The formatted string			
	
\*------------------------------------*/

function seoUnfriendly($seoFriendlyString){

	$seoUnfriendlyString = ucwords(str_replace('-', ' ', $seoFriendlyString));
	return $seoUnfriendlyString;

}

?>