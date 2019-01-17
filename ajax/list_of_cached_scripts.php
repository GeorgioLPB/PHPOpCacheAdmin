<?php
	include( '../inc/config.php' ) ;
	include( '../inc/functions.php' ) ;
	$opcache_get_configuration = opcache_get_configuration() ;
	$opcache_get_status = opcache_get_status() ;
?>
<h3>List of cached scripts</h3>
<table class="table table-bordered table-condensed table-hover" id='myTable'>
	<thead>
		<tr>
			<th>Name</th>
			<th>Hits</th>
			<th>Memory</th>
			<th>Last use</th>
<?php if( $opcache_get_configuration['directives']['opcache.validate_timestamps'] ) { ?>			<th>Created</th><?php } ?>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php
	$cpt = 0 ;
	foreach( $opcache_get_status["scripts"] as $key => $val)
	{
		echo "<input type='hidden' id='full_path_".$cpt."_ctl' value=\"$key\" />" ;
		echo "<tr>" ;
		echo "<td onmouseover=\"show_full_path('$cpt')\" onmouseout=\"hide_full_path('$cpt')\"><span class='full_path' id=\"full_path_$cpt\">".dirname( $val['full_path'] ).'/</span>'.basename( $val['full_path'] )."</td>" ;
		echo "<td class='right'>".formatInteger( $val['hits'] )."</td>" ;
		echo "<td class='right'>".formatBytes( $val['memory_consumption'] )."</td>" ;
		echo "<td class='right'>".date( $date_format, $val['last_used_timestamp'] )."</td>" ;
		if( $opcache_get_configuration['directives']['opcache.validate_timestamps'] ) { echo "<td class='right'>".date( $date_format, $val['timestamp'] )."</td>" ; }
		//echo "<td>".$val['full_path']."</td>" ;
		echo "<td class='center'><a href='#'><i class='far fa-trash-alt'></i></a></td>" ;
		echo "</tr>" ;
		$cpt++ ;
	}
?>		
	</tbody>
</table>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>