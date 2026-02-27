<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed'); session_start(); if(!isset($_SESSION['usuario'])) {session_destroy(); header("Location: ".ROOT_URL."login/");} require_once 'header.php'; $aUser = $_SESSION['usuario'];?>



	<div class="container-fluid bg-01">

        <div class="row p-5">

            <div class="col">

                <div>
                    <img class="logo mw-100" src="<?=STATIC_URL?>img/VIAS3Dsmall.png" height="30" />
                </div>

                <div>

                    <img src="<?=STATIC_URL?>img/VirtualDESKlogo.png" alt="VirtualDESK Logo" class="virtualdesk mw-100" width="480">

                </div>

                <h1 class="fw-bold">¡TE DAMOS LA BIENVENIDA!</h1>

                <h3 class="fw-semibold pb-3">Conoce VirtualDESK, un entorno digital donde VIRTU, nuestra inteligencia artificial, está aquí para optimizar tus procesos en soporte, prospección y consultoría. ¡Explora cómo puede potenciar tu día a día!</h3>

                <a href="#content" class="cta-button">DESCUBRE MÁS</a>

            </div>

            <div class="col"></div>

        </div>

    </div>



    <div class="container" id="content">

        <div class="row">
            <div class="col">
                <div id="message"></div>
            </div>
        </div>

        <div class="row py-5">

            <div class="col-12 col-sm-12 col-lg-6 mb-3">

                <div class="card">

                    <img class="card-img-top" src="https://dmd.com.mx/wp-content/uploads/2025/02/Soporte.png" alt="SupportIA en Soporte">

                    <div class="card-body">

                        <h2 class="card-title fw-bold" style="text-transform: none;">SupportIA / Soporte</h2>

                        <p class="card-description">Tu aliado en la solución de retos técnicos y operativos relacionados con los productos (licenciamiento). <br>SupportIA te ayuda principalmente con temas de instalación y activación de licencias. <u>Sólo debes precisar el tipo de licencia que tienes y la problemática o situación que estás enfrentando con tu licencia y de ahí puedes seguir con diversas preguntas que te permitan solucionar la problemática técnica que enfrentas.</u></p>

                        <a href="<?=ROOT_URL?>agents/soporte/" class="card-button">Ingresar con Agente Soporte</a>

                    </div>

                </div>

            </div>



            <div class="col-12 col-sm-12 col-lg-6 mb-3">

                <div class="card">

                    <img class="card-img-top" src="https://dmd.com.mx/wp-content/uploads/2025/02/Prospeccion.png" alt="ProspectIA en Prospección">

                    <div class="card-body">

                        <h2 class="card-title fw-bold" style="text-transform: none;">ProspectIA / Prospección</h2>

                        <p class="card-description">Transforma la búsqueda de oportunidades en una experiencia ágil. <br/> ProspectIA investiga la empresa que le indiques y te entrega un resumen con los datos de contacto identificados para maximizar tus esfuerzos de prospección. <u>Sólo debes precisar el nombre completo de la empresa y, si es posible, un enlace a su página web o redes sociales para asegurar que investiga la empresa correcta.</u></p>

                        <a href="<?=ROOT_URL?>agents/prospeccion/" class="card-button">Ingresar con Agente Prospección</a>

                    </div>

                </div>

            </div>



            <div class="col-12 col-sm-12 col-lg-6 mb-3">

                <div class="card">

                    <img class="card-img-top" src="https://dmd.com.mx/wp-content/uploads/2025/02/Consultor.png" alt="ConsultIA en Consultoría">

                    <div class="card-body">

                        <h2 class="card-title fw-bold" style="text-transform: none;">ConsultIA / Consultor</h2>

                        <p class="card-description">Consulta, aprende y toma decisiones estratégicas respaldadas por información inteligente. <br/> 
ConsultIA investiga la empresa que le indiques y te entrega un perfil completo del cliente que te permitirá conocerlo con mayor detalle para maximizar tus esfuerzos comerciales. <u>Sólo debes precisar el nombre completo de la empresa y, si es posible, un enlace a su página web o redes sociales para asegurar que investiga la empresa correcta.</u> A partir de ahí puedes seguir con diversas preguntas que te profundizar en el entendimiento de la empresa, las problemáticas que enfrenta el sector, sus competidores, clientes y proveedores, preguntas que puedes hacer al cliente para conocer sus ACN's e inclusive solicitar guiones de correos o conversaciones para lograr conectar mejor con el cliente lo que te permitirá desarrollar planes efectivos con insights precisos.</p>

                        <a href="<?=ROOT_URL?>agents/consultor/" class="card-button">Ingresar con Agente Consultor</a>

                    </div>

                </div>

            </div>

            <div class="col-12 col-sm-12 col-lg-6 mb-3">

                <div class="card">

                    <img class="card-img-top" src="https://dmd.com.mx/wp-content/uploads/2025/02/Prospeccion.png" alt="MarketIA en Prospección">

                    <div class="card-body">

                        <h2 class="card-title fw-bold" style="text-transform: none;">MarketIA / Inteligencia de Mercado</h2>

                        <p class="card-description">Transforma el análisis de mercado en una experiencia ágil. <br/> MarketIA investiga el mercado que le indiques, ya sea país, región, estado, entre otros y realiza el análisis de la situación política y económica de la industria manufacturera. <u>Sólo debes precisar el nombre de la región que quieras investigar</u> y a partir de ahí puedes avanzar con preguntas específicas que te permitan comprender mejor un mercado específico.</p>

                        <a href="<?=ROOT_URL?>agents/marketing/" class="card-button">Ingresar con Agente Marketing</a>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="container-fluid bg-02">

        <div class="row p-5">

            <div class="col text-center">

                <img src="https://dmd.com.mx/wp-content/uploads/2025/02/LOGO-PNG-NTELIGENCIA-ARTIFICIAL-04.png" alt="Logo del Área Promotora" width="240">

                <h1 class="fw-bold fs-2 text-uppercase text-white py-3">Resolviendo juntos cualquier desafío tecnológico</h1>

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

<?php if($aUser->getIdEst() == 0){?>
    <div class="modal fade" id="modalPass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPassLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form id="form-addUser" action="<?=ROOT_URL?>new-pass/" method="POST">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar contraseña</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                      <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="fw-semibold pb-3" for="con_usu">Establece tu nueva contraseña</label>
                                    <input type="password" name="con_usu" id="con_usu" class="form-control" placeholder="Contraseña" required>
                                    <input class="hidden" type="hidden" name="idU" value="<?=$aUser->getIdUsu()?>">
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
<?php }?>

<?php require_once 'footer.php';?>