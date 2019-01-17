<?php
	include( 'config.php' ) ;
	include( 'header_security.php' ) ;
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>PHPOpCacheAdmin</title>
	<link href="<?php echo $cdn_depot[$cdn]['bootstrap_css'] ; ?>" rel="stylesheet" />
	<link href="<?php echo $cdn_depot[$cdn]['datatables_css'] ; ?>" rel="stylesheet" />
	<link href="<?php echo $cdn_depot[$cdn]['fontawesome_css'] ; ?>" rel="stylesheet" />
	<link href="css/PHPOpCacheAdmin.css" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=".">PHPOpCacheAdmin</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#storage_policy" id='storage_policy'>Storage Policy</a></li>
					<li><a href="#filtering_policy" id='filtering_policy'>Filtering Policy</a></li>
					<li><a href="#invalidation_policy" id='invalidation_policy'>Invalidation Policy</a></li>
					<li><a href="#optimization_policy" id='optimization_policy'>Optimization policy</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#" id='list_of_cached_scripts'>List of cached scripts</a></li>
							<li><a href="#" id='get_configuration'>Get Configuration</a></li>
							<li><a href="#" id='get_status'>Get Status</a></li>
							<li><a href="#other" id='other'>Other Configuration</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" id='reset_cache'>Reset Cache</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id='container_main' class="container">
