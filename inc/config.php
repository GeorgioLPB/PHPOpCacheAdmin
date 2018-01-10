<?php
	define( 'PHP_MANUEL_URL', 'http://php.net/manual/en/opcache.configuration.php#ini.opcache.' ) ;

	$cdn = 'default' ;

	$cdn_depot = array(
		'default' => array(
			'bootstrap_css' => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
			'bootstrap_js' => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
			'jquery_js' => '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
			'chartjs_js' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js'
		),
		'georgio' => array(
			'bootstrap_css' => '//cdn.georgio.fr/bootstrap/latest/css/bootstrap.min.css',
			'bootstrap_js' => '//cdn.georgio.fr/bootstrap/latest/js/bootstrap.min.js',
			'jquery_js' => '//cdn.georgio.fr/jquery/latest/jquery.min.js',
			'chartjs_js' => '//cdn.georgio.fr/chartjs/latest/Chart.bundle.min.js'
		)
	) ;
?>
