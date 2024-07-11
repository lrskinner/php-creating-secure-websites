<?php

function extract_get_params($allowed_params=[]) {
	$allowed_array = [];
	foreach($allowed_params as $param) {
		if(isset($_GET[$param])) {
			$allowed_array[$param] = $_GET[$param];
		} else {
			$allowed_array[$param] = NULL;
		}
	}
	return $allowed_array;
}

$params = extract_get_params(['username', 'password']);

var_dump($params);

// http://localhost/~kevinskoglund/allowed_params.php?username=kskoglund&password=secret&logged_in=1

?>
