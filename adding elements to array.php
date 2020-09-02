<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$banana = array('peanut', 'butter', 'jelly');
			$banana[5] = 'time';

			// interesting output
			for($i = 0; $i < 6; $i++)
				echo $i . ": " . $banana[$i] . "<br />";

			// see also: array_push()
		?>
	</body>
</html>