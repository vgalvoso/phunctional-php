<?php
spl_autoload_register(function($className) {
	$file = "Model/".$className . '.php';
	if (file_exists($file)) {
		include $file;
	}
});