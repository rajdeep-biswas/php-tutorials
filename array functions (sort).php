<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$stars = array(array('twinkle', 'twinkle', 'little', 'star'), array('how', 'i', 'wonder', 'what', 'you', 'are'), array('up', 'above', 'the', 'world', 'so', 'high'), array('like', 'a', 'diamond', 'in', 'the', 'sky'));

			foreach($stars as $line) {
				sort($line);
				foreach($line as $word) {
					echo $word . " ";
				}
				echo "<br />";
			}

			// for more sort options https://www.youtube.com/watch?v=7TF00hJI78Y timepstamp 26:37
		?>
	</body>
</html>