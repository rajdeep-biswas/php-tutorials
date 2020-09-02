<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$stars = array(array('twinkle', 'twinkle', 'little', 'star'), array('how', 'i', 'wonder', 'what', 'you\'re'));

			foreach($stars as $line)
				foreach($line as $word)
					echo $word . " ";

			// same thing with for loop and count()
			// getting used to using a $ before every variable. everywhere.
			for($i = 0, $n = count($stars); $i < $n; $i++) {
				echo "<br />";
				for($j = 0, $m = count($stars[$i]); $j < $m; $j++) {
					echo $stars[$i][$j] . " ";
				}
			}
		?>
	</body>
</html>