<?php
	include( '../inc/config.php' ) ;
	include( '../inc/functions.php' ) ;
	$opcache_get_configuration = opcache_get_configuration() ;
	$opcache_get_status = opcache_get_status() ;
?>
<table class="table">
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
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>fast-shutdown' target='_blank'>fast_shutdown</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.fast_shutdown'] ; ?></td>
			<td><?php echo formatBoolean( $opcache_get_configuration['directives']['opcache.fast_shutdown'] ) ; ?></td>
			<td>If enabled, a fast shutdown sequence is used that doesn't free each allocated block.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>enable-file-override' target='_blank'>enable_file_override</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.enable_file_override'] ; ?></td>
			<td><?php echo formatBoolean( $opcache_get_configuration['directives']['opcache.enable_file_override'] ) ; ?></td>
			<td>When enabled, the opcode cache will be checked for whether a file has already been cached when file_exists(), is_file() and is_readable() are called.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>optimization-level' target='_blank'>optimization_level</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.optimization_level'] ; ?></td>
			<td><?php echo formatInteger( $opcache_get_configuration['directives']['opcache.optimization_level'], 'hexa' ) ; ?></td>
			<td>A bitmask that controls which optimisation passes are executed.</td>
		</tr>
	</tbody>
</table>
