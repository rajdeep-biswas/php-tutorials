<!doctype html>

<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$num1 = 1;
			$ref1 = &$num1;

			$ref1 += 5;

			echo $num1 . "<br />";
			echo $ref1;
		?>
	</body>
</html>