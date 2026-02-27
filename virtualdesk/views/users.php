<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed'); session_start(); if(!isset($_SESSION['usuario'])) {session_destroy(); header("Location: ".ROOT_URL."login/");} require_once 'header.php'; $aUser = $_SESSION['usuario'];?>

	<div class="container-fluid bg-01">
        <div class="row py-4 px-5 align-items-center">
            <div class="col">
                <img src="<?=STATIC_URL?>img/VirtualDESKlogo.png" alt="VirtualDESK Logo" class="logo mw-100 me-3" width="250">
                <span class="fs-2 fw-bold text-white text-uppercase">Usuarios</span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-03" data-bs-theme="dark">

      <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav mx-auto">

            <li class="nav-item">
              <a class="nav-link" href="<?=ROOT_URL?>">Inicio</a>
            </li>

            <li class="nav-item">

              <a class="nav-link <?=($pageName == 'agentsS' ? 'active' : '')?>"  href="<?=ROOT_URL?>agents/soporte/">Agente SupportIA</a>

            </li>

            <li class="nav-item">

              <a class="nav-link <?=($pageName == 'agentsP' ? 'active' : '')?>" href="<?=ROOT_URL?>agents/prospeccion/">Agente ProspectIA</a>

            </li>

            <li class="nav-item">

              <a class="nav-link <?=($pageName == 'agentsC' ? 'active' : '')?>" href="<?=ROOT_URL?>agents/consultor/">Agente ConsultIA</a>

            </li>

            <li class="nav-item">
                
              <a class="nav-link <?=($pageName == 'agentsM' ? 'active' : '')?>" href="<?=ROOT_URL?>agents/marketing/">Agente MarketIA</a>

            </li>

            <?php if($aUser->getIdTu() == 1){?>
	            <li class="nav-item">
	              <a class="nav-link <?=($pageName == 'aUsers' ? 'active' : '')?>" href="<?=ROOT_URL?>users/">Administrar Usuarios</a>
	            </li>
	        <?php }?>

            <li class="nav-item">
                <a class="nav-link" href="<?=ROOT_URL?>logout/">Salir <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </li>

          </ul>

        </div>

      </div>

    </nav>


    <div class="container-fluid bg-04">
    	<div class="container">

    		<div class="row pt-5">
    			<div class="col text-end">
    				<div id="message"></div>
    				<button type="button" class="cta-button border-0" data-bs-toggle="modal" data-bs-target="#modalUser">Agregar usuario</button>
    			</div>
    		</div>

        <div class="row py-5">
            <div class="col">

            	<table id="user-table" class="table table-striped table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Región</th>
                            <th>Perfil</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $item):?>
                            <tr>
                                <td><?=$item->getEmail()?></td>
                                <td><?=$item->getName()?></td>
                                <td><?=$item->getLastName()?></td>
                                <td><?=$item->getRegion()?></td>
                                <td><?=($item->getIdTu() == 1 ? 'Administrador' : 'Usuario')?></td>
                                <td class="text-center">
                                <?php if($aUser->getIdUsu() != $item->getIdUsu()){?>
                                	<a href="<?=ROOT_URL?>users/delete/<?=$item->getIdUsu()?>/" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                <?php }?>
                                </td>
                            </tr>  
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
	    </div>
    </div>

    <div class="container-fluid bg-black">
        <div class="container">
            <div class="row pt-3">
                <div class="col-12 col-md-6 col-lg-3 mb-3 text-center"><img class="mw-100" height="30" src="https://dmd.com.mx/wp-content/uploads/2024/05/SOLIDWORKS-WHITE.png" alt="SolidWorks Logo"></div>
                <div class="col-12 col-md-6 col-lg-3 mb-3 text-center"><img class="mw-100" height="30" src="https://dmd.com.mx/wp-content/uploads/2024/02/3DEXPERIENCE-WORKS-WHITE.png" alt="3DEXPERIENCE Works Logo"></div>
                <div class="col-12 col-md-6 col-lg-3 mb-3 text-center"><img class="mw-100" height="30" src="https://dmd.com.mx/wp-content/uploads/2024/04/delmia-works-logo-wh.png" alt="DELMIAWorks Logo"></div>
                <div class="col-12 col-md-6 col-lg-3 mb-3 text-center"><img class="mw-100" height="30" src="https://dmd.com.mx/wp-content/uploads/2024/08/Logo-Dassault.png" alt="Dassault Systèmes Logo"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
			    <div class="modal-content">
			    	<form id="form-addUser" action="<?=ROOT_URL?>users/add/" method="POST">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar nuevo usuario</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>

			      <div class="modal-body">
		      	  <div class="container-fluid">
		      	  	<div class="row">
		      	  		<div class="col">
		      	  			<div class="mb-3">
		      	  				<label class="fw-semibold" for="email">Correo electrónico</label>
                    	<input type="email" name="email" id="email" class="form-control" placeholder="example@example.com" required>
		      	  			</div>

		      	  			<div class="mb-3">
		      	  				<label class="fw-semibold" for="con_usu">Contraseña</label>
                    	<input type="password" name="con_usu" id="con_usu" class="form-control" placeholder="Contraseña" required>
		      	  			</div>

		      	  			<div class="mb-3">
		      	  				<label class="fw-semibold" for="name">Nombre</label>
                    	<input type="text" name="name" id="name" class="form-control" placeholder="Juan" required>
		      	  			</div>

		      	  			<div class="mb-3">
		      	  				<label class="fw-semibold" for="lastname">Apellidos</label>
                    	<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Pérez" required>
		      	  			</div>

		      	  			<div class="mb-3">
		      	  				<label class="fw-semibold" for="region">Región</label>
                    	<input type="text" name="region" id="region" class="form-control" placeholder="MX" required>
		      	  			</div>

		      	  			<div class="mb-3">
		      	  				<label class="fw-semibold" for="id_tu">Tipo de usuario</label>
		      	  				<select name="id_tu" id="id_tu" class="form-select" required>
		      	  					<option value="2" selected>Usuario</option>
		      	  					<option value="1">Administrador</option>
		      	  				</select>
		      	  			</div>

		      	  		</div>
		      	  	</div>
		      	  </div>
			      </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-primary">Registrar</button>
			      </div>
			    </form>
			  </div>
		  </div>
		</div>

<?php require_once 'footer.php';?>