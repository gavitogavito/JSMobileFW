<?php
	session_start();
	session_destroy();
	$url_gen = $_SERVER['HTTP_HOST'].'/';
	echo '<script type="text/javascript">window.localStorage.clear(); window.location.href="http://'.$url_gen.'"</script>';
?>