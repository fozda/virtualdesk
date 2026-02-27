<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed'); ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css"/>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

    <script src="<?=STATIC_URL?>js/custom.js"></script>

    <?php if($pageName == 'login'){?>

        <?php if(isset($_GET['error'])){?>
            <script>
                jQuery('#mensaje').html('<div class="alert alert-danger text-center mt-3" role="alert"><b>Error al iniciar sesión</b> verifica tus credenciales de acceso.</div>');
            </script>
        <?php }?>

    <?php } elseif($pageName == 'aUsers'){?>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                new DataTable('#user-table');
            });
        </script>

        <?php if(isset($_GET['error'])){?>
            <script>
                jQuery('#message').html('<div class="alert alert-danger text-center" id="mensaje" role="alert"><b>Error al registrar al usuario</b> verifique su información.</div>');
            </script>
        <?php } if(isset($_GET['success'])){?>
            <script>
                jQuery('#message').html('<div class="alert alert-success text-center" id="mensaje" role="alert"><b>Usuario registrado</b> se ha registrado la información con éxito.</div>');
            </script>
        <?php } if(isset($_GET['deleted'])){?>
            <script>
                jQuery('#message').html('<div class="alert alert-success text-center" id="mensaje" role="alert"><b>Usuario eliminado</b> se han realizado los cambios con éxito.</div>');
            </script>
        <?php } if(isset($_GET['errore'])){?>
            <script>
                jQuery('#message').html('<div class="alert alert-danger text-center" id="mensaje" role="alert"><b>Error al registrar usuario</b> el Email ya se encuentra registrado</div>');
            </script>
        <?php } if(isset($_GET['deletede'])){?>
            <script>
                jQuery('#message').html('<div class="alert alert-danger text-center" id="mensaje" role="alert"><b>Error al eliminar al usuario</b> verifique su información.</div>');
            </script>
        <?php }?>

    <?php } elseif($pageName == 'home'){?>

        <?php if($aUser->getIdEst() == 0){?>
            <script type="text/javascript">
                new bootstrap.Modal('#modalPass', {}).show();
            </script>
        <?php }?>

        <?php if(isset($_GET['perror'])){?>
            <script>
                jQuery('#message').html('<div class="alert alert-danger text-center mt-3" id="mensaje" role="alert"><b>Error al actualizar la contraseña</b> verifique su información.</div>');
            </script>
        <?php } if(isset($_GET['pupdated'])){?>
            <script>
                jQuery('#message').html('<div class="alert alert-success text-center mt-3" id="mensaje" role="alert"><b>Contraseña actualizada</b> se ha actualizado la información con éxito.</div>');
            </script>
        <?php } if(isset($_GET['pempty'])){?>
            <script>
                jQuery('#message').html('<div class="alert alert-danger text-center mt-3" id="mensaje" role="alert"><b>Error al actualizar la contraseña</b>.</div>');
            </script>
        <?php }?>

    <?php }?>

</body>

</html>