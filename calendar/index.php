<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Занятие 2</title>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<h1>Научный календарь</h1>
		<div class="form-group  form-control-lg">
			<label>Мероприятия на:</label>
			<?php echo "<input id='calinput' class='form-control col-lg-3' type='date' name='calendar' value='" . date("Y-m-d") . "'>";?>
		</div>
		<div id="events"></div>
	</div>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>