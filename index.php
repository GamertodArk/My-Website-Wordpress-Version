<?php  

	include 'core/core.php';

	if (isset($_GET['lg'])) {
		
		if (file_exists(TEMP_URL . strtolower($_GET['lg']) . '_temp.php')) {
			include TEMP_URL . strtolower($_GET['lg']) . '_temp.php';
		}else {
			include TEMP_URL . 'es_temp.php';
		}

	}else {
		include TEMP_URL . 'es_temp.php';
	}
?>