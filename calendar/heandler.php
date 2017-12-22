<?php
	// echo "<pre>";
	// var_dump($_POST);
	// echo "</pre>";

	$data = $_POST;
	$preparedData = implode(";", $data);
	$fileName = $data['date'] . '.txt';
	$fileFullPath = 'tmpl/' . $fileName;
	$message = "<h1>Мероприятие добавлено</h1><h2><a href='admin.php'>Добавить еще мероприятие</a></h2>";

	if (file_exists($fileFullPath)) {
		file_put_contents($fileFullPath, PHP_EOL . $preparedData, FILE_APPEND);
	} else {
		file_put_contents($fileFullPath, $preparedData);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка</title>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<div class="container"><?php echo $message; ?></div>
</body>
</html>
