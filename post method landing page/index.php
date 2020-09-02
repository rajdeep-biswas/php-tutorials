<!-- default method for HTML forms is GET -->
<!-- this file links to landing.php -->
<!-- method=post also works (without the quotes) -->

<html>
	<head>
		<title>inception</title>
	</head>

	<body>
		<form action="landing.php" method="post">
			<input type="text" name="nombre" />
			<input type="submit" name="enviar" />
		</form>
	</body>
</html>