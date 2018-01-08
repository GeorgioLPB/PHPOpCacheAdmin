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
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>validate-timestamps' target='_blank'>validate_timestamps</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.validate_timestamps'] ; ?></td>
			<td><?php echo formatBoolean( $opcache_get_configuration['directives']['opcache.validate_timestamps'] ) ; ?></td>
			<td>If enabled, OPcache will check for updated scripts every opcache.revalidate_freq seconds.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>revalidate-freq' target='_blank'>revalidate_freq</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.revalidate_freq'] ; ?></td>
			<td><?php echo formatInteger( $opcache_get_configuration['directives']['opcache.revalidate_freq'], 'seconds' ) ; ?></td>
			<td>How often to check script timestamps for updates, in seconds.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>revalidate-path' target='_blank'>revalidate_path</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.revalidate_path'] ; ?></td>
			<td><?php echo formatBoolean( $opcache_get_configuration['directives']['opcache.revalidate_path'] ) ; ?></td>
			<td>If disabled, existing cached files using the same include_path will be reused.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>max-wasted-percentage' target='_blank'>max_wasted_percentage</a></td>
			<td><?php echo $opcache_get_configuration['directives']['opcache.max_wasted_percentage'] ; ?></td>
			<td><?php echo formatInteger( $opcache_get_configuration['directives']['opcache.max_wasted_percentage'], '%' ) ; ?></td>
			<td>The maximum percentage of wasted memory that is allowed before a restart is scheduled.</td>
		</tr>
	</tbody>
</table>
