<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка</title>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<form action="heandler.php" method="POST">
		<div class="form-group  form-control-lg">
			<label>Дата мероприятия</label>
			<input class="form-control" type="date" name="date">
		</div>
		<div class="form-group  form-control-lg">
			<label>Наименование мероприятия</label>
			<input class="form-control" type="text" name="header">
		</div>
		<div class="form-group  form-control-lg">
			<label>Описание мероприятия</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Сохранить</button>
	</form>

	</div>
</body>
</html>