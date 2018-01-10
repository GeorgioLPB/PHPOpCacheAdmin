<?php
	include( '../inc/config.php' ) ;
	include( '../inc/functions.php' ) ;
	$opcache_get_configuration = opcache_get_configuration() ;
	$opcache_get_status = opcache_get_status() ;
?>
<h3>Invalisation Policy</h3>
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
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>validate-timestamps' target='_blank'>validate_timestamps</a></td>
			<td class='right'><?php echo $opcache_get_configuration['directives']['opcache.validate_timestamps'] ; ?></td>
			<td class='right'><?php echo formatBoolean( $opcache_get_configuration['directives']['opcache.validate_timestamps'] ) ; ?></td>
			<td>OPcache will check for updated scripts every opcache.revalidate_freq seconds.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>revalidate-freq' target='_blank'>revalidate_freq</a></td>
			<td class='right'><?php echo $opcache_get_configuration['directives']['opcache.revalidate_freq'] ; ?></td>
			<td class='right'><?php echo formatInteger( $opcache_get_configuration['directives']['opcache.revalidate_freq'], 'seconds' ) ; ?></td>
			<td>How often to check script timestamps for updates, in seconds.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>revalidate-path' target='_blank'>revalidate_path</a></td>
			<td class='right'><?php echo $opcache_get_configuration['directives']['opcache.revalidate_path'] ; ?></td>
			<td class='right'><?php echo formatBoolean( $opcache_get_configuration['directives']['opcache.revalidate_path'] ) ; ?></td>
			<td>If disabled, existing cached files using the same include_path will be reused.</td>
		</tr>
		<tr>
			<td><a href='<?php echo PHP_MANUEL_URL ; ?>max-wasted-percentage' target='_blank'>max_wasted_percentage</a></td>
			<td class='right'><?php echo $opcache_get_configuration['directives']['opcache.max_wasted_percentage'] ; ?></td>
			<td class='right'><?php echo formatInteger( $opcache_get_configuration['directives']['opcache.max_wasted_percentage'], '%' ) ; ?></td>
			<td>The maximum percentage of wasted memory that is allowed before a restart is scheduled.</td>
		</tr>
	</tbody>
</table>
