<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<?php
			$sherlock = 'london bridge is falling down';
			
			$jon = substr($sherlock, 0, 13);
			echo $jon . "<br />";

			// interesting return value (same in c; didn't know https://www.programiz.com/c-programming/library-function/string.h/strcmp) 
			echo strcmp("man", "manhole") . "<br />";

			// not sure if i completely understand this or care enough to try to understand later when i'm not sleepy because i see no utility
			echo strstr('this is a nice string innit?', 'string') . "<br />";

			echo str_replace('london bridge', 'the entirety of pakistan', $sherlock);

			// this is out of context but DOES seem useful
			echo `dir /w`; // `ls -ls` for linux
		?>
	</body>
</html>