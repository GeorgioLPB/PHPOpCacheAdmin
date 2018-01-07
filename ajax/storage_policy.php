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
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>memory-consumption' target='_blank'>memory_consumption</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.memory_consumption'] ; ?></td>
			<td><?php echo formatBytes( $opcache_get_configuration['directives']['opcache.memory_consumption'] ) ; ?></td>
			<td>The size of the shared memory storage used by OPcache.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>max-accelerated-files' target='_blank'>max_accelerated_files</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.max_accelerated_files'] ; ?></td>
			<td><?php echo formatInteger( $opcache_get_configuration['directives']['opcache.max_accelerated_files'], 'files' ) ; ?></td>
			<td>The maximum number of keys (and therefore scripts) in the OPcache hash table.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>interned-strings-buffer' target='_blank'>interned_strings_buffer</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.interned_strings_buffer'] ; ?></td>
			<td><?php echo formatMBytes( $opcache_get_configuration['directives']['opcache.interned_strings_buffer'] ) ; ?></td>
			<td>The amount of memory used to store interned strings.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>save-comments' target='_blank'>save_comments</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.save_comments'] ; ?></td>
			<td><?php echo formatBoolean( $opcache_get_configuration['directives']['opcache.save_comments'] ) ; ?></td>
			<td>If disabled, all documentation comments will be discarded from the opcode cache to reduce the size of the optimised code.</td>
		</tr>
<?php if( isset( $opcache_get_configuration['directives']['opcache.load_comments'] ) ) { ?>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>load-comments' target='_blank'>load_comments</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.load_comments'] ; ?></td>
			<td><?php echo formatBoolean( $opcache_get_configuration['directives']['opcache.load_comments'] ) ; ?></td>
			<td>If disabled, documentation comments won't be loaded from the opcode cache even if they exist.</td>
		</tr>
<?php } ?>
	</tbody>
</table>
