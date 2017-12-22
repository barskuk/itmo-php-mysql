<?php
	$curDay = $_POST['date'];
	$file = file_get_contents('tmpl/'.$curDay.'.txt', FILE_USE_INCLUDE_PATH);
	$data = explode(";", $file);
	echo json_encode($data);
?>