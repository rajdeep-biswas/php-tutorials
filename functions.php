<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			function factorial($n) {
				if($n <= 1)
					return 1;
				else
					return $n * factorial($n - 1);
			}

			echo "factorial of five is " . factorial(5);

			// PS: made a mess again between the function and variable name and the $ prefix
		?>
	</body>
</html>