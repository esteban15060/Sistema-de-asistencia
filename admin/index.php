<?php
session_start();
if (isset($_SESSION['admin'])) {
	header('location:home.php');
}
?>
<?php include 'includes/header.php'; ?>

<body id="fondo" class="hold-transition login-page fondoimagen-admin">
	<div class="login-box">
		<div class="login-logo titu">
			<h3>PANEL DE CONTROL</h3>
		</div>

		<div class="login-admin" id="fondo-imagen">

			<form action="login.php" method="POST">
				<div class="form-group has-feedback">
					<label for="username">Usuario</label>
					<input type="text" class="form-control" name="username" placeholder="Usuario" required autofocus>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<label for="password">Contraseña</label>
					<input type="password" class="form-control" name="password" placeholder="Contraseña" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="button">
					<button type="submit" name="login">Ingresar</button>
				</div>
			</form>
		</div>
		<?php
		if (isset($_SESSION['error'])) {
			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>" . $_SESSION['error'] . "</p> 
			  	</div>
  			";
			unset($_SESSION['error']);
		}
		?>
	</div>

	<?php include 'includes/scripts.php' ?>

	<script>
		const fondoImagenElement = document.getElementById('fondo');
		const carpetaFondos = '../img/fondo-admin/';
		const imagenesFondo = [
			'Fondo-Panel-de-Control-1.webp',
			'Fondo-Panel-de-Control-2.webp',
			'Fondo-Panel-de-Control-3.webp',
			'Fondo-Panel-de-Control-4_1.webp',
			'Fondo-Panel-de-Control-5.webp',
			'Fondo-Panel-de-Control-6.webp',
		];
		let indiceAleatorio;
		let ultimoIndiceAleatorio;

		document.addEventListener("DOMContentLoaded", function() {
			do {
				indiceAleatorio = Math.floor(Math.random() * imagenesFondo.length);
			} while (indiceAleatorio === ultimoIndiceAleatorio);

			ultimoIndiceAleatorio = indiceAleatorio;

			const imagenFondoURL = carpetaFondos + imagenesFondo[indiceAleatorio];
			fondoImagenElement.style.backgroundImage = `url(${imagenFondoURL})`;
			fondoImagenElement.style.backgroundRepeat = 'no-repeat';
			fondoImagenElement.style.backgroundSize = 'cover';
			fondoImagenElement.style.backgroundAttachment = 'fixed';
		});
	</script>
</body>

</html>
