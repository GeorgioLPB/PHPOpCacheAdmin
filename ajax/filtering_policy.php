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
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>file_update_protection' target='_blank'>file_update_protection</a></td>
			<td class='right'><?php echo ini_get( 'opcache.file_update_protection' ) ; ?></td>
			<td class='right'><?php echo formatInteger( ini_get( 'opcache.file_update_protection' ), 'secondes' ) ; ?></td>
			<td>Prevents caching files that are less than this number of seconds old.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>max-file-size' target='_blank'>max_file_size</a></td>
			<td class='right'><?php echo $opcache_get_configuration['directives']['opcache.max_file_size'] ; ?></td>
			<td class='right'><?php echo formatMBytes( $opcache_get_configuration['directives']['opcache.max_file_size'] ) ; ?></td>
			<td>The maximum file size that will be cached.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>blacklist-filename' target='_blank'>blacklist_filename</a></td>
                        <?php if( empty( $opcache_get_configuration['directives']['opcache.blacklist_filename'] ) ) { ?>
			<td><?php echo $opcache_get_configuration['directives']['opcache.blacklist_filename'] ; ?></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.blacklist_filename'] ; ?></td>
			<td>The location of the OPcache blacklist file.</td>
                        <?php } else { ?>
			<td colspan='3'><?php echo $opcache_get_configuration['directives']['opcache.blacklist_filename'] ; ?></td>
                        <?php } ?>
		</tr>
	</tbody>
</table>
<?php
if( ! empty( $opcache_get_configuration['directives']['opcache.blacklist_filename'] ) ) {
echo '<pre>Blacklist : <ul>' ;
foreach( $opcache_get_configuration['blacklist'] as $val ){ echo "<li>".$val."</li>" ; }
echo '</ul></pre>' ;
}
?>