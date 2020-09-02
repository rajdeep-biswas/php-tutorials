<!doctype html>

<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$str1 = "biswas";
			$ref1 = &$str1;

			// pretty cool, huh?
			$ref1 .= ", rajdeep";

			echo $str1 . "<br />";
			echo $ref1;
		?>
	</body>
</html>