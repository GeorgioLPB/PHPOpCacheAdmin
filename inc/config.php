<?php
define( 'PHP_MANUEL_URL', 'http://php.net/manual/en/opcache.configuration.php#ini.opcache.' ) ;

$cdn = 'default' ;
$use_minify = true ;

$date_format = 'Y-m-d H:i:s' ;
//$date_format = 'd/m/Y H:i:s' ;

/* storage_policy */
$groupe_directive['storage_policy']['memory_consumption']      = [ 'src' => 'cfg', 'type' => 'bytes',  'comment' => 'The size of the shared memory storage used by OPcache.' ] ;
$groupe_directive['storage_policy']['max_accelerated_files']   = [ 'src' => 'cfg', 'type' => 'files',  'comment' => 'The maximum number of keys (and therefore scripts)' ] ;
$groupe_directive['storage_policy']['interned_strings_buffer'] = [ 'src' => 'cfg', 'type' => 'Mbytes', 'comment' => 'The amount of memory used to store interned strings.' ] ;
$groupe_directive['storage_policy']['save_comments']           = [ 'src' => 'cfg', 'type' => 'bool',   'comment' => 'Keep the comments of the documentation in the cache.' ] ;
$groupe_directive['storage_policy']['load_comments']           = [ 'src' => 'cfg', 'type' => 'bool',   'comment' => 'Load the comments of the documentation from the cache.' ] ;

/* filtering_policy */
$groupe_directive['filtering_policy']['file_update_protection'] = [ 'src' => 'ini', 'type' => 'seconds',  'comment' => 'Prevents caching files that are less than this number of seconds old.' ] ;
$groupe_directive['filtering_policy']['max_file_size']          = [ 'src' => 'cfg', 'type' => 'Mbytes',   'comment' => 'The maximum file size that will be cached.' ] ;
$groupe_directive['filtering_policy']['blacklist_filename']     = [ 'src' => 'cfg', 'type' => 'location', 'comment' => 'The location of the OPcache blacklist file.' ] ;

/* invalidation_policy */
$groupe_directive['invalidation_policy']['validate_timestamps']   = [ 'src' => 'cfg', 'type' => 'bool', 'comment' => 'OPcache will check for updated scripts every opcache.revalidate_freq seconds.' ] ;
$groupe_directive['invalidation_policy']['revalidate_freq']       = [ 'src' => 'cfg', 'type' => 'seconds', 'comment' => 'How often to check script timestamps for updates, in seconds.' ] ;
$groupe_directive['invalidation_policy']['revalidate_path']       = [ 'src' => 'cfg', 'type' => 'bool', 'comment' => 'If disabled, existing cached files using the same include_path will be reused.' ] ;
$groupe_directive['invalidation_policy']['max_wasted_percentage'] = [ 'src' => 'cfg', 'type' => 'percent', 'comment' => 'The maximum percentage of wasted memory that is allowed before a restart is scheduled.' ] ;

/* optimization_policy */
$groupe_directive['optimization_policy']['fast_shutdown']        = [ 'src' => 'cfg', 'type' => 'bool', 'comment' => 'A fast shutdown sequence is used that doesn\'t free each allocated block.' ] ;
$groupe_directive['optimization_policy']['enable_file_override'] = [ 'src' => 'cfg', 'type' => 'bool', 'comment' => 'Cache will be checked for whether a file has already been cached when file_exists(), is_file() and is_readable() are called.' ] ;
$groupe_directive['optimization_policy']['optimization_level']   = [ 'src' => 'cfg', 'type' => 'hexa', 'comment' => 'A bitmask that controls which optimisation passes are executed.' ] ;
$groupe_directive['optimization_policy']['use_cwd']              = [ 'src' => 'cfg', 'type' => 'bool', 'comment' => 'If enabled, OPcache appends the current working directory to the script key, thereby eliminating possible collisions between files with the same base name.' ] ;

	$cdn_depot = array(
		'default' => array(
			'bootstrap_css' => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
			'bootstrap_js' => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
			'jquery_js' => '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
			'chartjs_js' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js',
			'fontawesome_css' => '//use.fontawesome.com/releases/v5.6.3/css/all.css',
			'datatables_css' => '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css',
			'datatables_js' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'
		)
	) ;
?>
