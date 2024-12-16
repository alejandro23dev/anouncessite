<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>
		Reparación y Mantenimiento de Ordenadores
	</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" />
	<link rel="shortcut icon" href="<?php echo base_url('public/assets/images/logo.png'); ?>" />

	<!-- CSS Dependences -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link href="<?php echo base_url('public/assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />

	<!-- JS Dependences -->
	<script src="<?php echo base_url('public/assets/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/jquery/dist/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/plugins/global/plugins.bundle.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/js/scripts.bundle.js'); ?>"></script>

	<link href="<?php echo base_url('public/assets/animate.css/animate.min.css'); ?>" rel="stylesheet" type="text/css">

	<style>
		body {
			font-family: 'Montserrat', sans-serif;
		}


		.navbar-brand {
			font-weight: bold;
			color: #007BFF;
		}

		.navbar-brand:hover {
			color: #0056b3;
		}

		.hero {
			background: url('<?php echo base_url('public/assets/images/1920 x 600.jpeg'); ?>') no-repeat center center;
			background-size: cover;
			text-align: center;
			padding: 100px 0;
		}

		.hero h1 {
			font-size: 3rem;
			margin-bottom: 20px;
		}

		.hero p {
			font-size: 1.5rem;
		}

		.services .card {
			margin-bottom: 30px;
		}

		.contact-form {
			background: #f8f9fa;
			padding: 30px;
			border-radius: 10px;
		}

		.btn-primary {
			background-color: #007BFF;
			border-color: #007BFF;
		}

		.btn-primary:hover {
			background-color: #0056b3;
			border-color: #0056b3;
		}

		.btn-danger {
			background-color: #FF4136;
			border-color: #FF4136;
		}

		.btn-danger:hover {
			background-color: #c12e2a;
			border-color: #c12e2a;
		}

		.bg-light-blue {
			background-color: #007BFF;
			color: white;
		}

		.bg-light-blue h2,
		.bg-light-blue p {
			color: white;
		}

		.navbar {
			position: sticky;
			top: 0;
			z-index: 1000;
		}

		.section-title {
			font-family: 'Montserrat', sans-serif;
			/* Cambia a la fuente que prefieras */
			font-size: 2.5rem;
			/* Tamaño del título */
			color: #333;
			/* Color del texto */
			margin-bottom: 0.5rem;
			/* Espacio debajo del título */
			text-transform: uppercase;
			/* Convierte el texto a mayúsculas */
			letter-spacing: 1px;
			/* Espaciado entre letras */
		}

		.section-subtitle {
			font-family: 'Roboto', sans-serif;
			/* Cambia a la fuente que prefieras */
			font-size: 1.2rem;
			/* Tamaño del subtítulo */
			color: #666;
			/* Color del texto */
			max-width: 600px;
			/* Ancho máximo del subtítulo */
			margin: 0 auto;
			/* Centra el subtítulo */
			line-height: 1.5;
			/* Altura de línea para mejor legibilidad */
		}
	</style>
</head>

<body>
	<?php echo view($page); ?>
</body>

</html>