
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
var myChart = new Chart(ctxopcachehitrate, {
	type: 'doughnut',
	data: {
		labels: [ "hit success", "hit misses" ],
		datasets: [{
			data: [ $('#opcache_hit_rate').val(), ( 100 - $('#opcache_hit_rate').val() ) ],
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
var myChart = new Chart(ctxstorage, {
	type: 'pie',
	data: {
		labels: [ "Used Memory", "Free Memory", "Wasted Memory" ],
		datasets: [{
			data: [ $('#used_memory_value').text(), $('#free_memory_value').text(), $('#wasted_memory_value').text() ],
			backgroundColor: [
				'rgba(92, 184, 92)',
				'rgba(91, 192, 222)',
				'rgba(240, 173, 78)'
			],
			borderWidth: 1
		}]
	},
        options: { legend: { display: false } }
});

var ctxisb = document.getElementById("chart-isb").getContext('2d');
var myChart = new Chart(ctxisb, {
	type: 'pie',
	data: {
		labels: [ "Used Memory", "Free Memory" ],
		datasets: [{
			data: [ $('#used_isb_value').text(), $('#free_isb_value').text() ],
			backgroundColor: [
				'rgba(92, 184, 92)',
				'rgba(91, 192, 222)'
			],
			borderWidth: 1
		}]
	},
        options: { legend: { display: false } }
});

var ctxks = document.getElementById("chart-ks").getContext('2d');
var myChart = new Chart(ctxks, {
	type: 'pie',
	data: {
		labels: [ "Cached Keys", "Free Keys" ],
		datasets: [{
			data: [ $('#used_ks_value').text(), $('#free_ks_value').text() ],
			backgroundColor: [
				'rgba(92, 184, 92)',
				'rgba(91, 192, 222)'
			],
			borderWidth: 1
		}]
	},
        options: { legend: { display: false } }
});

/* Actions */

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

