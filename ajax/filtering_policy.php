<?php
	include( '../inc/config.php' ) ;
	include( '../inc/functions.php' ) ;
	$opcache_get_configuration = opcache_get_configuration() ;
	$opcache_get_status = opcache_get_status() ;
?>
<h3>Storage Policy</h3>
<table class="table table-bordered table-condensed table-hover">
	<thead>
		<tr>
			<th>Directives</th>
			<th>Values</th>
			<th>Human values</th>
			<th>Definitions</th>
		</tr>
	</thead>
	<tbody>
<?php
	foreach( $groupe_directive['filtering_policy'] as $key => $val )
	{ include( '../inc/presentation.php' ) ; }
?>

	</tbody>
</table>
<?php
if( ! empty( $opcache_get_configuration['directives']['opcache.blacklist_filename'] ) ) {
echo '<pre>Blacklist : <ul>' ;
foreach( $opcache_get_configuration['blacklist'] as $val ){ echo "<li>".$val."</li>" ; }
echo '</ul></pre>' ;
}
?>
