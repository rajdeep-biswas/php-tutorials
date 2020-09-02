<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$banana = array(1 => 'peanut', 2 => 'butter', 'time' => 'jelly');

			$havana = array('oh', 'nana');

			$gabbana = $havana + $banana;

			foreach($gabbana as $uno => $dos)
				echo $uno . ": " . $dos . "<br />";

			echo "----<br />";

			$gabbana = $banana + $havana;

			foreach($gabbana as $uno => $dos)
				echo $uno . ": " . $dos . "<br />";

			// what replaces which makes sense, now. http://php.net/manual/en/language.operators.array.php
		?>
	</body>
</html>