<?php

/*------------------------------------*\
	
	SEO Friendly String
	
	@param string $seoUnfriendlyString The original string
	
	@return $seoFriendlyString The formatted string			
	
\*------------------------------------*/

function seoFriendly($seoUnfriendlyString){

	$seoFriendlyString = str_replace(' ', '-', strtolower($seoUnfriendlyString));
	return $seoFriendlyString;

}

?>