<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed'); require_once 'header.php';?>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<div class="container-fluid" style="background: url('<?=STATIC_URL?>img/web/bg-secc-05.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
        <div class="row p-4 align-items-center" id="registro">
            <div class="col-md"></div>
            <div class="col-md-6 mt-4 mb-4">

                <div class="box-red">
                    <h2 class="text-white display-3 fw-bold text-center" style='font-family: "Poppins";'><i>¡Únete a la carrera!</i></h2>
                    <p class="text-white fs-4 px-4 text-center">
                        Completa el formulario para asegurar tu <strong>acceso exclusivo a nuestro evento virtual...</strong>
                    </p>

                	<div class="px-4" id="mensaje"></div>
			        <form class="formulari px-4" id="contact-form" autocomplete="off">
			          <div class="row mb-4">
			            <div class="col-md-6 mb-2">
			              <label class="text-white" for="nombre">Nombre(s)</label>
			              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Agustín" required="" autocomplete="off">
			            </div>
			            <div class="col-md-6">
			              <label class="text-white" for="apm">Apellidos</label>
			              <input type="text" class="form-control" id="apm" name="apm" placeholder="Melgar" required="">
			            </div>
			          </div>

			          <div class="row mb-4">
			            <div class="col-md-6 mb-2">
			              <label class="text-white" for="correo">Email</label>
			              <input type="email" class="form-control" id="correo" name="correo" placeholder="melgara@visa-diseno.com" required="" autocomplete="off">
			            </div>
			            <div class="col-md-6">
			              <label class="text-white" for="telefono">Teléfono</label>
			              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="81 1209 6521" required="">
			            </div>
			          </div>

			          <div class="row mb-4">
			            <div class="col-md-6 mb-2">
			              <label class="text-white" for="puesto">Puesto</label>
			              <select class="form-control" id="puesto" name="puesto" required="" style="appearance: auto; height: 38px;">
			                <option value="">Puesto que mejor describa sus funciones</option>
			                <option value="Director General / Finanzas">Director General / Finanzas</option>
							<option value="Director Gerente Planta / Operaciones">Director Gerente Planta / Operaciones</option>
							<option value="Director Gerente de Ingeniería de Diseño">Director Gerente de Ingeniería de Diseño</option>
							<option value="Director Gerente de Ingeniería de Manufactura">Director Gerente de Ingeniería de Manufactura</option>
							<option value="Director Gerente de Producción">Director Gerente de Producción</option>
							<option value="Director Gerente de TI">Director Gerente de TI</option>
							<option value="Director Gerente RH">Director Gerente RH</option>
							<option value="Director Gerente Comercial">Director Gerente Comercial</option>
							<option value="Ingeniero de Diseño / Mecánico / Mecatrónico">Ingeniero de Diseño / Mecánico / Mecatrónico</option>
							<option value="Ingeniero de Manufactura / Procesos">Ingeniero de Manufactura / Procesos</option>
							<option value="Ingeniero Eléctrico / Electrónico">Ingeniero Eléctrico / Electrónico</option>
							<option value="Ingeniero de Calidad">Ingeniero de Calidad</option>
							<option value="Ingeniero Analista / Simulación">Ingeniero Analista / Simulación</option>
							<option value="Diseñador Industrial">Diseñador Industrial</option>
							<option value="Emprendedor Constituido">Emprendedor Constituido</option>
							<option value="Profesional Independiente">Profesional Independiente</option>
							<option value="Compras">Compras</option>
							<option value="Sistemas">Sistemas</option>
							<option value="Director de Universidad">Director de Universidad</option>
							<option value="Académico / Investigador">Académico / Investigador</option>
							<option value="Estudiante">Estudiante</option>
							<option value="Equipo Técnico DMD">Equipo Técnico DMD</option>
							<option value="Equipo Comercial DMD">Equipo Comercial DMD</option>
							<option value="Equipo Administrativo DMD">Equipo Administrativo DMD</option>
			              </select>
			            </div>
			            <div class="col-md-6 mb-2">
			              <label class="text-white" for="empresa">Empresa</label>
			              <input type="text" class="form-control" id="empresa" name="empresa" placeholder="DISEÑO TECNOLÓGICO VISA S DE RL DE CV" required="">
			            </div>
			          </div>

			          <div class="row mb-4" style="align-items: center;">
			          	<div class="col-md-6 mb-2">
			              <label class="text-white" for="cp">Código Postal</label>
			              <input type="tel" class="form-control" id="cp" name="cp" placeholder="45200" required="">
			            </div>
			            <div class="col-md-6 mb-2">
			              <div class="form-group">
			                <label class="text-white" for="estado">Entidad Federativa</label>
			                <select class="form-control" id="estado" name="estado" required="" style="appearance: auto; height: 38px;">
			                  <option value="" style="color: #6c757d;">Seleccione su entidad federativa</option>
			                  <option value="Aguascalientes">Aguascalientes</option>
			                  <option value="Baja California">Baja California</option>
			                  <option value="Baja California Sur">Baja California Sur</option>
			                  <option value="Campeche">Campeche</option>
			                  <option value="Chihuahua">Chihuahua</option>
			                  <option value="Chiapas">Chiapas</option>
			                  <option value="Coahuila">Coahuila</option>
			                  <option value="Colima">Colima</option>
			                  <option value="Durango">Durango</option>
			                  <option value="Estado de México">Estado de México</option>
			                  <option value="Guanajuato">Guanajuato</option>
			                  <option value="Guerrero">Guerrero</option>
			                  <option value="Hidalgo">Hidalgo</option>
			                  <option value="Jalisco">Jalisco</option>
			                  <option value="Ciudad de México">Ciudad de México</option>
			                  <option value="Michoacan">Michoacan</option>
			                  <option value="Morelos">Morelos</option>
			                  <option value="Nayarit">Nayarit</option>
			                  <option value="Nuevo León">Nuevo León</option>
			                  <option value="Oaxaca">Oaxaca</option>
			                  <option value="Puebla">Puebla</option>
			                  <option value="Queretaro">Queretaro</option>
			                  <option value="Quintana Roo">Quintana Roo</option>
			                  <option value="San Luis Potosi">San Luis Potosi</option>
			                  <option value="Sinaloa">Sinaloa</option>
			                  <option value="Sonora">Sonora</option>
			                  <option value="Tabasco">Tabasco</option>
			                  <option value="Tamaulipas">Tamaulipas</option>
			                  <option value="Tlaxcala">Tlaxcala</option>
			                  <option value="Veracruz">Veracruz</option>
			                  <option value="Yucatan">Yucatan</option>
			                  <option value="Zacatecas">Zacatecas</option>
			                </select>
			              </div>
			            </div>			            
			          </div>

			          <div class="row mt-4 mb-4">
			          	<div class="col-md-12 text-center">
			          		<div class="g-recaptcha" data-sitekey="6LdivEkiAAAAAFnIn9wKXRYZZ4gYQOTCLeToRfDA"></div>
			          	</div>
			          </div>

			          <div class="row mt-4 mb-4">
			            <div class="col-md-3"></div>
			            <div class="col-md-6 text-center">
			              <div class="form-group">
			                <button id="btn-enviar" class="w-100 boton boton-white" type="submit">Registrar</button>
			              </div>
			            </div>
			            <div class="col-md-3"></div>
			          </div>

			          <div class="row mt-4 mb-4">
			          	<div class="col-md-3"></div>
			            <div class="col-md-6 text-center">
			              <div class="mb-4">
			              	<p class="text-white">o</p>
			              </div>
				          <a class="boton-2 boton-white-2" href="<?=ROOT_URL?>login">Inicia sesión</a>
			            </div>
			            <div class="col-md-3"></div>
			          </div>
			        </form>
                </div>
            </div>
            <div class="col-md"></div>
            <div class="col-md-5 text-center">
                <img class="img-default" src="<?=STATIC_URL?>img/web/logo-secc-05.png">
            </div>
        </div>
    </div>

<?php require_once 'footer.php';?>