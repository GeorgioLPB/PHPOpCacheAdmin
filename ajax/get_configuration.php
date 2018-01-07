<?php
	$opcache_get_configuration = opcache_get_configuration() ;
?>
<br />
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#version">Version</a></li>
	<li><a data-toggle="tab" href="#directives">Directives</a></li>
	<li><a data-toggle="tab" href="#blacklist">Blacklist</a></li>
</ul>
<div class="tab-content">
	<div id="version" class="tab-pane fade in active">
		<h3>Version</h3>
		<p><pre><?php var_dump( $opcache_get_configuration['version'] ) ; ?></pre></p>
	</div>
	<div id="directives" class="tab-pane fade">
		<h3>Directives</h3>
		<p><pre><?php var_dump( $opcache_get_configuration['directives'] ) ; ?></pre></p>
	</div>
	<div id="blacklist" class="tab-pane fade">
		<h3>Blacklist</h3>
		<p><pre><?php var_dump( $opcache_get_configuration['blacklist'] ) ; ?></pre></p>
	</div>
</div>
