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

?>