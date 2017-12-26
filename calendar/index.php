<?php 
function calendar($month, $year) {

	$m = intval($month);
	$y = intval($year);
	$countDays = cal_days_in_month(CAL_GREGORIAN, $m, $y);
	$firstDay = "01.$m.$y";
	$lastDay = "$countDays.$m.$y";
	$firstWeek = date("W", strtotime($firstDay));
	$dayOfWeek = date("w", strtotime($firstDay)); 
	$lastWeek = date("W", strtotime($lastDay));

	$d = 1;
	$daystart = 0;

	if ($dayOfWeek == 0) {
		$dayOfWeek = 7;
	}
	for ($i = $firstWeek; $i <= $lastWeek; $i++) {
		$arrRow = array();
		for ($j = 1; $j <= 7; $j++) {
			if ($j < $dayOfWeek && $daystart == 0) {
				array_push($arrRow, " ");
			} else {
				$daystart = 1;
				
				if ($d <= $countDays) {
					array_push($arrRow, $d);
				} else {
					array_push($arrRow, " ");
				}
				$d++;
			}
		}
		$arrDays[$i] = $arrRow;
	}

	$calendarRows = "";
	for ($i = $firstWeek;  $i <= $lastWeek; $i++) {
		$calendarRows .= "<tr><td><small class='text-muted'>$i<small></td>";
		for ($j = 0; $j <= 6; $j++) {

			$date1 = str_pad($arrDays[$i][$j], 2, "0", STR_PAD_LEFT);

			$fileName = $y . "-" . $m . "-" . $date1 . '.txt';
			$fileFullPath = 'tmpl/' . $fileName;

			if (file_exists($fileFullPath)) {
				$printDate = "<a href='#'>" . $arrDays[$i][$j] . "</a>";
			} else {
				$printDate = $arrDays[$i][$j];
			}

			$calendarRows .= "<td>" . $printDate .  "</td>";
		}
		$calendarRows .= "</tr>";
	}
	$calendarHead = "
	<table class='table'>
		<thead>
			<tr>
				<th scope='col'>#</th>
				<th scope='col'>Пн</th>
				<th scope='col'>Вт</th>
				<th scope='col'>Ср</th>
				<th scope='col'>Чт</th>
				<th scope='col'>Пт</th>
				<th scope='col'>Сб</th>
				<th scope='col'>Вс</th>
			</tr>
		</thead>
		<tbody>";

	$calendar = "";
	$calendar .= $calendarHead . $calendarRows . "</tbody></table>";
	return $calendar;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Научный календарь</title>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid"></div>
	<div class="container">
		<header>
			<h1>Научный календарь</h1>
			<div class="form-group  form-control-md">
				<label>Фильтр мероприятий:</label>
				<?php echo "<input id='calinput' class='form-control col-lg-3' type='date' name='calendar' value='" . date("Y-m-d") . "'>";?>
			</div>
		</header>
		<div class="row">
			<main class="col-9">
				<div id="events"></div>
			</main>
			<aside class="col-3">
				<div class="row">
					<h5>Календарь мероприятий:</h5>
					<?php echo calendar("12", "2017"); ?>
				</div>
			</aside>
		</div>
	</div>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>