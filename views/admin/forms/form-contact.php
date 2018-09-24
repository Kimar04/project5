          <div class="contact">
          <fieldset >
            <legend>Formulario de contacto</legend>
          	<form  name="contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">>
              <p>
                <label>Solicitud</label>
                <select name="contact" required>
                  <option value="guejas">Quejas</option>
                   <option value="sugerencias">Sugerencias</option>
                   <option value="soporte">Soporte tecnico</option>
                   <option value="servicio">Nuevo servicio</option>
                   <option value="selected" selected></option>
                </select>
              </p>
              <p>
                <input type="email" name="dest_msg" placeholder="Para: " required>
              </p>
              <p>
                <input type="text" name="asunto_msg" placeholder="Asunto: " required>
              </p>
        <P>
 					<label>Escribanos</label>
 						<textarea  name="comentario"
 						cols="60" rows="10">
 						</textarea>
          </P>
                <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                <input type="hidden" name="correo" value="<?php echo $correo; ?>">
          <p>
 					<button type="submit" name="enviar-msg">Enviar mensaje</button>
 					<button type="reset" name="limpiar datos">Limpiar datos</button>
        </p>
 	</form>
  </fieldset>
  