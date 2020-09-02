<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			// both ||, && and or, and work
			// also, both else if and elseif work

			if(true and false)
				echo "true and false";
			else if(!true or false)
				echo "true or false";
			elseif(!true and true)
				echo "true and true";
			else if(false or false)
				echo "false or false";
			elseif(true && true and false)
				echo "true && true and true";
			else
				echo "nope, tho";
		?>
	</body>
</html>