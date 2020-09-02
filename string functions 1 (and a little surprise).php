<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$myString = '          richard             ';

			echo strlen($myString) . "<br />";
			echo strlen(ltrim($myString)) . "<br />";
			echo strlen(rtrim("$myString")) . "<br />";
			echo strlen(trim($myString)) . "<br />";

			echo "the myString is $myString" . "<br />";

			// surprise!
			printf("the myString is %s<br />", $myString);

			echo strtoupper("richard dixon") . "<br />";
			echo strtolower("richard dixon") . "<br />";
			echo ucfirst("richard dixon") . "<br />";
		?>
	</body>
</html>