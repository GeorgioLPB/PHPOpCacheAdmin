
/* Menu */

$('#storage_policy').click(function() {
	$.ajax({
		url: "ajax/storage_policy.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

$('#filtering_policy').click(function() {
	$.ajax({
		url: "ajax/filtering_policy.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

$('#invalidation_policy').click(function() {
	$.ajax({
		url: "ajax/invalidation_policy.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

$('#optimization_policy').click(function() {
	$.ajax({
		url: "ajax/optimization_policy.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

/* Storage Pie */

var ctxopcachehitrate = document.getElementById("chart-opcachehitrate").getContext('2d');
var myChart_opcachehitrate = new Chart(ctxopcachehitrate, {
	type: 'doughnut',
	data: {
		labels: [ "hit success", "hit misses" ],
		datasets: [{
			data: [ $('#opcache_hit_rate').val(), ( Math.round( 100 * ( 100 - $('#opcache_hit_rate').val() ) ) / 100 ) ],
			backgroundColor: [
				'rgba(92, 184, 92)',
				'rgba(240, 173, 78)'
			],
			borderWidth: 1
		}]
	},
	options: { legend: { display: false } }
});

var ctxstorage = document.getElementById("chart-storage").getContext('2d');
var bgcolor_stg = [ 'rgba(92, 184, 92)', 'rgba(91, 192, 222)', 'rgba(240, 173, 78)' ] ;
if( 90 < ( 100 * Number( $('#used_memory_value').text() ) / ( Number( $('#used_memory_value').text() ) + Number( $('#free_memory_value').text() ) + Number( $('#wasted_memory_value').text() ) ) ) )
{ bgcolor_stg = [ 'rgba(255, 92, 92)', 'rgba(91, 192, 222)', 'rgba(240, 173, 78)' ] ; }
var myChart_storage = new Chart(ctxstorage, {
	type: 'pie',
	data: {
		labels: [ "Used Memory", "Free Memory", "Wasted Memory" ],
		datasets: [{
			data: [ $('#used_memory_value').text(), $('#free_memory_value').text(), $('#wasted_memory_value').text() ],
			backgroundColor: bgcolor_stg,
			borderWidth: 1
		}]
	},
	options: { legend: { display: false } }
});

var ctxisb = document.getElementById("chart-isb").getContext('2d');
var bgcolor_isb = [ 'rgba(92, 184, 92)', 'rgba(91, 192, 222)' ] ;
if( 90 < ( 100 * Number( $('#used_isb_value').text() ) / ( Number( $('#used_isb_value').text() ) + Number( $('#free_isb_value').text() ) ) ) )
{ bgcolor_isb = [ 'rgba(255, 92, 92)', 'rgba(91, 192, 222)' ] ; }
var myChart_isb = new Chart(ctxisb, {
	type: 'pie',
	data: {
		labels: [ "Used Memory", "Free Memory" ],
		datasets: [{
			data: [ $('#used_isb_value').text(), $('#free_isb_value').text() ],
			backgroundColor: bgcolor_isb,
			borderWidth: 1
		}]
	},
	options: { legend: { display: false } }
});

var ctxks = document.getElementById("chart-ks").getContext('2d');
var bgcolor_ks = [ 'rgba(92, 184, 92)', 'rgba(91, 192, 222)' ] ;
if( 90 < ( 100 * Number( $('#used_ks_value').text() ) / ( Number( $('#used_ks_value').text() ) + Number( $('#free_ks_value').text() ) ) ) )
{ bgcolor_ks = [ 'rgba(255, 92, 92)', 'rgba(91, 192, 222)' ] ; }
var myChart_ks = new Chart(ctxks, {
	type: 'pie',
	data: {
		labels: [ "Cached Keys", "Free Keys" ],
		datasets: [{
			data: [ $('#used_ks_value').text(), $('#free_ks_value').text() ],
			backgroundColor: bgcolor_ks,
			borderWidth: 1
		}]
	},
	options: { legend: { display: false } }
});

/* Actions */

$('#list_of_cached_scripts').click(function() {
	$.ajax({
		url: "ajax/list_of_cached_scripts.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

$('#get_configuration').click(function() {
	$.ajax({
		url: "ajax/get_configuration.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

$('#get_status').click(function() {
	$.ajax({
		url: "ajax/get_status.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

$('#other').click(function() {
	$.ajax({
		url: "ajax/other.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

$('#reset_cache').click(function() {
	$.ajax({
		url: "ajax/reset_cache.php",
	}).done(function( data ){
		$('#container_main').html( data ) ;
	});
});

/* List of cached scripts */

function show_full_path( id )
{
	//alert( id ) ;
	//alert( $('#full_path_' + id + '_ctl').val() ) ;
	$('#full_path_'+id).show() ;
}

function hide_full_path( id )
{
	//alert( id ) ;
	//alert( $('#full_path_' + id + '_ctl').val() ) ;
	$('#full_path_'+id).hide() ;
}

