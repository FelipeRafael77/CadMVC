<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
</head>
<body>
	<h1>Menu</h1>
	<a href="<?php echo BASE_URL; ?>">Home</a>
	<a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
	<hr/>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>