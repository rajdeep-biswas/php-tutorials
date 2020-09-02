<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$sherlock = 'london bridge is falling down';
			$john = explode(' ', $sherlock);

			foreach($john as $mary)
				echo $mary . " ";

			$missusHudson = implode(' ', $john);

			echo $missusHudson;
		?>
	</body>
</html>