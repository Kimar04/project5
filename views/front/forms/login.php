<?php
include ('../../../views/front/templates/head.php') ?>

<div class="login">
<fieldset>
		<legend>Formulario de ingreso</legend>
		<form name="login" method="post" action="http://localhost/slideshow/app/Http/Controllers/Controller.php" required>
				<input type="email" name="correo_log" placeholder="you@example.com.." required>

				<input type="password" name="password_log" placeholder="password.." required>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="first-name" />
								<input type="hidden" name="last-name" />
								<input type="hidden" name="company"/>
								<input type="hidden" name="username" />
								<input type="hidden" name="email">
								<input type="hidden" name="password" />
								<button type="submit" name="btn-login">Ingresar</button>
								<button type="reset">Cancelar</button>
		</form>
	</fieldset>
	<p><a href="http://localhost/slideshow/index.php">Registrarse</a></p>
</div>

<?php      include ('../../../views/front/templates/foot.php')  ?>