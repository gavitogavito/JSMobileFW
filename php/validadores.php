<?php
	function valida_md5($md5 ='') {return preg_match('/^[a-f0-9]{32}$/', $md5); }
	function valida_nombre($q = '') {return preg_match('/[\^<,\"@\/\{\}\(\)\*\$%\?=>:\|;#]+/i', $q);}
	function valida_numero($q = '') {return preg_match('/^[0-9]/', $q);}
?>