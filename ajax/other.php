<?php
	include( '../inc/config.php' ) ;
	include( '../inc/functions.php' ) ;
	$opcache_get_configuration = opcache_get_configuration() ;
	$opcache_get_status = opcache_get_status() ;
?>
<h3>Other</h3>
<table class="table table-bordered table-condensed table-hover">
	<thead>
		<tr>
			<th>Directives</th>
			<th>Values</th>
		</tr>
	</thead>
	<tbody>

<?php
foreach( $groupe_directive as $directives )
{
	foreach( $directives as $key => $val )
	{
		if( 0 == strcmp( $val['src'], 'cfg' ) )
		{ $liste_directive_traite['opcache.'.$key] = 'opcache.'.$key ; }
	}
}
//ksort( $liste_directive_traite ) ;
//var_dump( $liste_directive_traite ) ;

$liste_directive_total = $opcache_get_configuration['directives'] ;
//ksort( $liste_directive_total ) ;
//var_dump( $liste_directive_total ) ;

foreach( $liste_directive_total as $directive => $valeur )
{
	if( ! isset( $liste_directive_traite[$directive] ) )
	{
		//var_dump( $directive." => ".$valeur ) ;
		echo "<tr><td>$directive</td><td>$valeur</td></tr>" ;
	}
}

?>

	</tbody>
</table>
