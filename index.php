<!DOCTYPE HTML> 
<html>  
	<head>  
		<title></title>
		<script>
		<?php
			ini_set('display_errors', 'On');
			error_reporting(E_ALL | E_STRICT);
		?>
		function getWindowSize() {
			var w = window,
			d = document,
			e = d.documentElement,
			g = d.getElementsByTagName('body')[0],
			x = w.innerWidth || e.clientWidth || g.clientWidth,
			y = w.innerHeight|| e.clientHeight|| g.clientHeight;
			return {'x': x, 'y': y};
		}
		
		// window.onload = printWindowSize;
		// window.onresize = printWindowSize;
	</script>
	</head>  
	<body>  
		
	</body>
</html>