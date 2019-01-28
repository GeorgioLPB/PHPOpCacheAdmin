	</div>

	<footer class="footer">
		<div class="container">
			<span class="text-muted"><a href='https://github.com/GeorgioLPB/PHPOpCacheAdmin'><i class="fab fa-github"></i> GitHub</a></span>
		</div>
	</footer>

	<script src="<?php echo $cdn_depot[$cdn]['jquery_js'] ; ?>"></script>
	<script src="<?php echo $cdn_depot[$cdn]['bootstrap_js'] ; ?>"></script>
	<script src="<?php echo $cdn_depot[$cdn]['datatables_js'] ; ?>"></script>
	<script src="<?php echo $cdn_depot[$cdn]['chartjs_js'] ; ?>"></script>
	<script src="<?php echo ( $use_minify ) ? 'js/PHPOpCacheAdmin.min.js' : 'js/PHPOpCacheAdmin.js' ; ?>"></script>

</body>
</html>