<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			// printing all true values to get '1' since '0' (false) doesn't get echoed for some reason
			// the only notable one
			echo (5 !== 3) . "<br>"; // update: this compares value AS WELL AS type

			// additions
			echo (2 <=> 3) . "<br />"; // read documentation http://php.net/manual/en/language.operators.comparison.php
			echo (2 <> 3) . "<br>" . (2 != 3) . "<br>"; // same things
			echo (5 !== 5.0) . "<br>"; // "only notable one" demonstrated
			echo (5 == 5.0) . "<br>"; // try adding one more equal symbol and note difference 

		?>
	</body>
</html>