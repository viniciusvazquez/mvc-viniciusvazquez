<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>MVC</title>
</head>
<body>
	<h1>site em mvc</h1>
	<nav>
		<a href="./">Home</a>
		<a href="/galeria">Galeria</a>
	</nav>
	<hr>
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>