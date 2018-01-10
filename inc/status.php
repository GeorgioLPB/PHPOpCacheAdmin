<?php
	include( 'functions.php' ) ;
	$opcache_get_configuration = opcache_get_configuration() ;
	$opcache_get_status = opcache_get_status() ;
?>
<!-- Statistiques -->
<div class="row">
	<div class="col-sm-3">
		<h3>Statistiques</h3>
                <div id='canvas'><canvas id="chart-opcachehitrate"></canvas></div>
		<input type='hidden' id='opcache_hit_rate' value='<?php echo round( $opcache_get_status['opcache_statistics']['opcache_hit_rate'], 2 ) ; ?>' />
	</div>
	<div class="col-sm-4">
		<h3>hit rate : <?php echo formatInteger( $opcache_get_status['opcache_statistics']['opcache_hit_rate'], '%' ) ; ?></h3>
		<table class="table table-bordered table-condensed table-hover">
			<thead>
				<tr>
					<th>Requests</th>
					<th>Values</th>
				</tr>
			</thead>
			<tbody>
				<tr class='success'>
					<td>Hits</td>
					<td class='right'><?php echo formatInteger( $opcache_get_status['opcache_statistics']['hits'] ) ; ?></td>
				</tr>
				<tr class='danger'>
					<td>Misses</td>
					<td class='right'><?php echo formatInteger( $opcache_get_status['opcache_statistics']['misses'] ) ; ?></td>
				</tr>
			<tbody>
		</table>
	</div>
	<div class="col-sm-5">
		<h3>&nbsp;</h3>
		<ul>
			<li>Product Name : <?php echo $opcache_get_configuration['version']['opcache_product_name'] ; ?></li>
			<li>Version : <?php echo $opcache_get_configuration['version']['version'] ; ?></li>
			<li>Started : <?php echo date( DATE_RFC822, $opcache_get_status['opcache_statistics']['start_time'] ) ; ?></li>
			<li>Since &nbsp; : <?php echo nbTime( time() - $opcache_get_status['opcache_statistics']['start_time'] ) ; ?></li>
		</ul>
	</div>
</div>
<!-- Memory Storage -->
<div class="row">
	<div class="col-sm-3"><h3>Memory Storage</h3><div id='canvas'><canvas id="chart-storage"></canvas></div></div>
	<div class="col-sm-5">
		<h3>&nbsp;Max storage : <?php echo formatBytes( $opcache_get_configuration['directives']['opcache.memory_consumption'] ) ; ?></h3>
		<table class="table table-bordered table-condensed table-hover">
			<thead>
				<tr>
					<th>Memory</th>
					<th>Values</th>
					<th>Human Values</th>
					<th>Percentage</th>
				</tr>
			</thead>
			<tbody>
				<tr class='success'>
					<td>Used</td>
					<td id='used_memory_value' class='right'><?php echo $opcache_get_status['memory_usage']["used_memory"] ; ?></td>
					<td id='used_memory_hvalue' class='right'><?php echo formatBytes( $opcache_get_status['memory_usage']["used_memory"] ) ; ?></td>
					<td id='used_memory_percentage' class='right'><?php echo formatInteger( 100 * ( $opcache_get_status['memory_usage']["used_memory"] / $opcache_get_configuration['directives']['opcache.memory_consumption'] ), '%' ) ; ?></td>
				</tr>
				<tr class='info'>
					<td>Free</td>
					<td id='free_memory_value' class='right'><?php echo $opcache_get_status['memory_usage']["free_memory"] ; ?></td>
					<td id='free_memory_hvalue' class='right'><?php echo formatBytes( $opcache_get_status['memory_usage']["free_memory"] ) ; ?></td>
					<td id='free_memory_percentage' class='right'><?php echo formatInteger( 100 * ( $opcache_get_status['memory_usage']["free_memory"] / $opcache_get_configuration['directives']['opcache.memory_consumption'] ), '%' ) ; ?></td>
				</tr>
				<tr class='warning'>
					<td>Wasted</td>
					<td id='wasted_memory_value' class='right'><?php echo $opcache_get_status['memory_usage']["wasted_memory"] ; ?></td>
					<td id='wasted_memory_hvalue' class='right'><?php echo formatBytes( $opcache_get_status['memory_usage']["wasted_memory"] ) ; ?></td>
					<td id='wasted_memory_percentage' class='right'><?php echo formatInteger( 100 * ( $opcache_get_status['memory_usage']["wasted_memory"] / $opcache_get_configuration['directives']['opcache.memory_consumption'] ), '%' ) ; ?></td>
				</tr>
			<tbody>
		</table>
	</div>
	<div class="col-sm-4">&nbsp;</div>
</div>
<div class="row">
	<div class="col-sm-3"><h3>Interned Strings Buffer</h3><div id='canvas'><canvas id="chart-isb"></canvas></div></div>
	<div class="col-sm-5">
		<h3>&nbsp;Max storage : <?php echo formatMBytes( $opcache_get_configuration['directives']['opcache.interned_strings_buffer'] ) ; ?> ( Currently : <?php echo formatInteger( $opcache_get_status['interned_strings_usage']["number_of_strings"], 'strings' ) ; ?> )</h3>
		<table class="table table-bordered table-condensed table-hover">
			<thead>
				<tr>
					<th>Memory</th>
					<th>Values</th>
					<th>Human Values</th>
					<th>Percentage</th>
				</tr>
			</thead>
			<tbody>
				<tr class='success'>
					<td>Used</td>
					<td id='used_isb_value' class='right'><?php echo $opcache_get_status['interned_strings_usage']["used_memory"] ; ?></td>
					<td id='used_isb_hvalue' class='right'><?php echo formatBytes( $opcache_get_status['interned_strings_usage']["used_memory"] ) ; ?></td>
					<td id='used_isb_percentage' class='right'><?php echo formatInteger( 100 * ( $opcache_get_status['interned_strings_usage']["used_memory"] / $opcache_get_status['interned_strings_usage']['buffer_size'] ), '%' ) ; ?></td>
				</tr>
				<tr class='info'>
					<td>Free</td>
					<td id='free_isb_value' class='right'><?php echo $opcache_get_status['interned_strings_usage']["free_memory"] ; ?></td>
					<td id='free_isb_hvalue' class='right'><?php echo formatBytes( $opcache_get_status['interned_strings_usage']["free_memory"] ) ; ?></td>
					<td id='free_isb_percentage' class='right'><?php echo formatInteger( 100 * ( $opcache_get_status['interned_strings_usage']["free_memory"] / $opcache_get_status['interned_strings_usage']['buffer_size'] ), '%' ) ; ?></td>
				</tr>
			<tbody>
		</table>
	</div>
	<div class="col-sm-4">&nbsp;</div>
</div>
<div class="row">
	<div class="col-sm-3"><h3>Key Storage</h3><div id='canvas'><canvas id="chart-ks"></canvas></div></div>
	<div class="col-sm-5">
		<h3>&nbsp;Max keys : <?php echo formatInteger( $opcache_get_status['opcache_statistics']['max_cached_keys'], 'keys' ) ; ?> ( Currently : <?php echo formatInteger( $opcache_get_status['opcache_statistics']['num_cached_scripts'], 'files' ) ; ?> )</h3>
		<table class="table table-bordered table-condensed table-hover">
			<thead>
				<tr>
					<th>Keys</th>
					<th>Values</th>
					<th>Human Values</th>
					<th>Percentage</th>
				</tr>
			</thead>
			<tbody>
				<tr class='success'>
					<td>Cached</td>
					<td id='used_ks_value' class='right'><?php echo $opcache_get_status['opcache_statistics']['num_cached_keys'] ; ?></td>
					<td id='used_ks_hvalue' class='right'><?php echo formatInteger( $opcache_get_status['opcache_statistics']['num_cached_keys'], 'keys' ) ; ?></td>
					<td id='used_ks_percentage' class='right'><?php echo formatInteger( 100 * ( $opcache_get_status['opcache_statistics']['num_cached_keys'] / $opcache_get_status['opcache_statistics']['max_cached_keys'] ), '%' ) ; ?></td>
				</tr>
				<tr class='info'>
					<td>Free</td>
					<td id='free_ks_value' class='right'><?php echo $opcache_get_status['opcache_statistics']['max_cached_keys'] - $opcache_get_status['opcache_statistics']['num_cached_keys'] ; ?></td>
					<td id='free_ks_hvalue' class='right'><?php echo formatInteger( $opcache_get_status['opcache_statistics']['max_cached_keys'] - $opcache_get_status['opcache_statistics']['num_cached_keys'], 'keys' ) ; ?></td>
					<td id='free_ks_percentage' class='right'><?php echo formatInteger( 100 * ( ( $opcache_get_status['opcache_statistics']['max_cached_keys'] - $opcache_get_status['opcache_statistics']['num_cached_keys'] ) / $opcache_get_status['opcache_statistics']['max_cached_keys'] ), '%' ) ; ?></td>
				</tr>
			<tbody>
		</table>
	</div>
	<div class="col-sm-4">&nbsp;</div>
</div>
