<?php
	header( 'X-Frame-Options: SAMEORIGIN' ) ;
	header( 'X-XSS-Protection: 1; mode=block' ) ;
	header( 'X-Content-Type-Options: nosniff' ) ;
	header( 'Referrer-Policy: same-origin' ) ;
	/*
	$script = '\'self\' https://ajax.googleapis.com https://maxcdn.bootstrapcdn.com https://cdnjs.cloudflare.com' ;
	$style = '\'self\' \'unsafe-inline\' https://maxcdn.bootstrapcdn.com https://fonts.googleapis.com' ;
	$font = '\'self\' https://fonts.googleapis.com https://maxcdn.bootstrapcdn.com https://fonts.gstatic.com' ;
	header( 'Content-Security-Policy: default-src \'self\'; script-src '.$script.'; style-src '.$style.'; font-src '.$font.' ;' ) ;
	*/
?>