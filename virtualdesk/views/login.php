<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed'); 



	session_start(); if(!isset($_SESSION['usuario'])) session_destroy(); else{session_start(); header("Location: ".ROOT_URL);} require_once 'header.php'; ?>





	<link rel="stylesheet" type="text/css" href="<?=STATIC_URL?>css/style.css">

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>



	<div class="d-lg-flex half">



	    <div class="bg order-1 order-md-2" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://dmd.com.mx/wp-content/uploads/2024/07/325623871_1920x1080.jpg');"></div>



	    <div class="contents order-2 order-md-1" style="background-image: url('https://dmd.com.mx/wp-content/uploads/2025/02/BGVirtualDESK.jpg');">



	      	<div class="container">



		        <div class="row align-items-center justify-content-center">



			          <div class="col-md-7">



			          	<div class="text-center">

			          		<img class="img-default" src="<?=STATIC_URL?>img/VirtualDESKlogo.png" width="360" />
			          		<img class="img-default" src="<?=STATIC_URL?>img/VIAS3Dsmall.png" height="45" />

			          		<div id="mensaje"></div>

			          	</div>



			            <form id="form-login" action="<?=ROOT_URL?>login/check/" method="POST" autocomplete="off">



							<div class="form-group first text-white pt-5 mb-2 mx-auto" style="width: 304px;">

								<label class="mb-2 fw-semibold" for="inputUser">Email</label>

								<input type="email" class="form-control" placeholder="youremail@gmail.com" id="inputUser" name="inputUser">

							</div>



							<div class="form-group text-white pt-3 mb-2 mx-auto" style="width: 304px;">

								<label class="mb-2 fw-semibold" for="inputPass">Contraseña</label>

								<input type="password" class="form-control" placeholder="contraseña" id="inputPass" name="inputPass">

							</div>



							<div class="form-group last pt-3 mb-3 mx-auto text-white">

								<div class="g-recaptcha" data-sitekey="6LdivEkiAAAAAFnIn9wKXRYZZ4gYQOTCLeToRfDA"></div>

							</div>



							<div class="text-center">

								<button type="submit" class="cta-button border-0">Ingresar</button>

							</div>



			            </form>



			          </div>



		        </div>



	      	</div>



	    </div>



	</div>	





<?php require_once 'footer.php';?>