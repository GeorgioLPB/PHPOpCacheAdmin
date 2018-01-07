<?php
	$opcache_get_status = opcache_get_status() ;
?>
<br />
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#bases">Bases</a></li>
	<li><a data-toggle="tab" href="#memory_usage">Memory Usage</a></li>
	<li><a data-toggle="tab" href="#interned_strings_usage">Interned Strings Usage</a></li>
	<li><a data-toggle="tab" href="#opcache_statistics">Opcache Statistics</a></li>
	<li><a data-toggle="tab" href="#scripts">Scripts</a></li>
</ul>
<div class="tab-content">
	<div id="bases" class="tab-pane fade in active">
		<h3>Bases</h3>
		<p><pre>
<?php
	$base = $opcache_get_status ;
	unset( $base['memory_usage'] ) ;
	unset( $base['interned_strings_usage'] ) ;
	unset( $base['opcache_statistics'] ) ;
	unset( $base['scripts'] ) ;
	var_dump( $base ) ;
?>
		</pre></p>
	</div>
	<div id="memory_usage" class="tab-pane fade">
		<h3>Memory Usage</h3>
		<p><pre><?php var_dump( $opcache_get_status['memory_usage'] ) ; ?></pre></p>
	</div>
	<div id="interned_strings_usage" class="tab-pane fade">
		<h3>Interned Strings Usage</h3>
		<p><pre><?php var_dump( $opcache_get_status['interned_strings_usage'] ) ; ?></pre></p>
	</div>
	<div id="opcache_statistics" class="tab-pane fade">
		<h3>Opcache Statistics</h3>
		<p><pre><?php var_dump( $opcache_get_status['opcache_statistics'] ) ; ?></pre></p>
	</div>
	<div id="scripts" class="tab-pane fade">
		<h3>Scripts</h3>
		<p><pre><?php var_dump( $opcache_get_status['scripts'] ) ; ?></pre></p>
	</div>
</div>
