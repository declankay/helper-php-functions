<?php

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