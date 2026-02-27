<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed'); session_start(); if(!isset($_SESSION['usuario'])) {session_destroy(); header("Location: ".ROOT_URL."login/");} require_once 'header.php'; $aUser = $_SESSION['usuario'];?>



	<div class="container-fluid bg-01">

        <div class="row py-4 px-5 align-items-center">

            <div class="col">

                <img src="<?=STATIC_URL?>img/VirtualDESKlogo.png" alt="VirtualDESK Logo" class="logo mw-100 me-3" width="250">

                <span class="fs-2 fw-bold text-white"><?=($pageName == 'agentsS' ? 'SupportIA / Soporte' : ($pageName == 'agentsP' ? 'ProspectIA / Prospección' : ($pageName == 'agentsC' ? 'ConsultIA / Consultor' : ($pageName == 'agentsM' ? 'MarketIA / Inteligencia de Mercado' : ($pageName == 'aUsers' ? 'Usuarios' : '')))))?></span>

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

        <div class="row py-5">

            <div class="col">

            <?php if($pageName == 'agentsS'){?>
                <script type="module">

                    import Chatbox from 'https://cdn.jsdelivr.net/npm/@chatsappai/embeds@1.0.231/dist/chatbox/index.min.js';

                    Chatbox.initStandard({

                        agentId: 'cm1pco0ar002f8ww18xx2n8bc',
                        contact: {
                            firstName: '<?=$aUser->getName()?>',
                            lastName: '<?=$aUser->getLastName()?>',
                            email: '<?=$aUser->getEmail()?>',
                        },
                        initialMessages: [
                          'Hello Georges how are you doing today?',
                          'How can I help you ?',
                        ],
                        context: "The user you are talking to is <?=$aUser->getName()?>. Start by Greeting him by his name.",
                    });

                </script>
            <?php } elseif($pageName == 'agentsP'){?>

                <script type="module">
                  import Chatbox from 'https://cdn.jsdelivr.net/npm/@chatsappai/embeds@1.0.231/dist/chatbox/index.min.js';

                  Chatbox.initStandard({
                    agentId: 'cm2cnasuu000cnamh0q74gp6v',
                    contact: {
                        firstName: '<?=$aUser->getName()?>',
                        lastName: '<?=$aUser->getLastName()?>',
                        email: '<?=$aUser->getEmail()?>',
                    },
                    initialMessages: [
                      'Hello Georges how are you doing today?',
                      'How can I help you ?',
                    ],
                    context: "The user you are talking to is <?=$aUser->getName()?>. Start by Greeting him by his name.",
                  });
                </script>


            <?php } elseif($pageName == 'agentsC'){?>

                <script type="module">
                  import Chatbox from 'https://cdn.jsdelivr.net/npm/@chatsappai/embeds@1.0.231/dist/chatbox/index.min.js';

                  Chatbox.initStandard({
                    agentId: 'cm5zpmoei0044tp1jtsubsjwj',
                    contact: {
                        firstName: '<?=$aUser->getName()?>',
                        lastName: '<?=$aUser->getLastName()?>',
                        email: '<?=$aUser->getEmail()?>',
                    },
                    initialMessages: [
                      'Hello Georges how are you doing today?',
                      'How can I help you ?',
                    ],
                    context: "The user you are talking to is <?=$aUser->getName()?>. Start by Greeting him by his name.",
                  });
                </script>
            
            <?php } elseif($pageName == 'agentsM'){?>

                <script type="module">
                  import Chatbox from 'https://cdn.jsdelivr.net/npm/@chatsappai/embeds@1.0.231/dist/chatbox/index.min.js';

                  Chatbox.initStandard({
                    agentId: 'cm7ldvg3m000jmb5jnj55g0y8',
                    contact: {
                        firstName: '<?=$aUser->getName()?>',
                        lastName: '<?=$aUser->getLastName()?>',
                        email: '<?=$aUser->getEmail()?>',
                    },
                    initialMessages: [
                      'Hello Georges how are you doing today?',
                      'How can I help you ?',
                    ],
                    context: "The user you are talking to is <?=$aUser->getName()?>. Start by Greeting him by his name.",
                  });
                </script>

            <?php }?>

                <chatsappai-chatbox-standard style="width: 100%; height: 650px;" />

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



<?php require_once 'footer.php';?>