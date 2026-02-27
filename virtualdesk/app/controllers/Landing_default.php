<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed'); require_once MODEL_PATH.'Admin_model.php';

class Landing_Default
{
    public static function index()
    {
        $pageName = 'home';
        include VIEWS_PATH.'onepage.php';
        exit();
    }

    public static function agentsS()
    {
        $pageName = 'agentsS';
        include VIEWS_PATH.'agents.php';
        exit();
    }

    public static function agentsP()
    {
        $pageName = 'agentsP';
        include VIEWS_PATH.'agents.php';
        exit();
    }

    public static function agentsC()
    {
        $pageName = 'agentsC';
        include VIEWS_PATH.'agents.php';
        exit();
    }

    public static function agentsM()
    {
        $pageName = 'agentsM';
        include VIEWS_PATH.'agents.php';
        exit();
    }

    public static function aUsers()
    {
        $pageName = 'aUsers';
        $instancia = new Admin_model();
        $users = $instancia->getUsers();
        include VIEWS_PATH.'users.php';
        exit();
    }

    public static function login()
    {
        $pageName = 'login';
        include VIEWS_PATH.'login.php';
        exit();
    }

    public static function loginCheck()

    {

        if(isset($_POST['inputUser']) && !empty($_POST['inputUser']) && isset($_POST['inputPass']) && !empty($_POST['inputPass']) && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))

        {

            /* Validación de Captcha obteniendo IP */

            $user_agent = $_SERVER['HTTP_USER_AGENT'];

            $user_ip = '';

            if(isset($_SERVER['HTTP_CLIENT_IP']))

                $user_ip = $_SERVER['HTTP_CLIENT_IP'];

            elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP']))

                $user_ip = $_SERVER['HTTP_CF_CONNECTING_IP']; 

            elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']))

                $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

            elseif (isset($_SERVER['HTTP_X_FORWARDED']))

                $user_ip = $_SERVER['HTTP_X_FORWARDED'];

            elseif (isset($_SERVER['HTTP_FORWARDED_FOR']))

                $user_ip = $_SERVER['HTTP_FORWARDED_FOR'];

            elseif (isset($_SERVER['HTTP_FORWARDED']))

                $user_ip = $_SERVER['HTTP_FORWARDED'];

            elseif (isset($_SERVER['REMOTE_ADDR']))

                $user_ip = $_SERVER['REMOTE_ADDR'];

            else

                $user_ip = '0.0.0.0';



            $captcha = $_POST['g-recaptcha-response'];

            $secretKey = "6LdivEkiAAAAABgdH8KjeywpkXot1SVqLO6jexur";

            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$user_ip);

            $responseKeys = json_decode($response,true);

            /*if($responseKeys["success"]) header('Location: '.ROOT_URL.'login/?captcha');*/



            /* Verificando acceso para inicio de sesión */

            $correo = filter_var($_POST["inputUser"], FILTER_SANITIZE_EMAIL);

            $pass = $_POST['inputPass'];

            $instancia = new Admin_model();

            if($instancia->checkAccess($correo, $pass))
            {
                session_start();
                $_SESSION['usuario'] = $instancia->getUserByEmail($correo);
                header('Location: '.ROOT_URL );
            }
            else header('Location: '.ROOT_URL.'login/?error');

        }

        else header('Location: '.ROOT_URL.'login/?error');

        exit();

    }

    public static function logout(){
        session_start(); 
        session_destroy();
        header("Location: ".ROOT_URL."login/"); 
    }

    public static function addUser()
    {
        session_start();
        if(!isset($_SESSION['usuario'])) header('Location: '.ROOT_URL.'login/');

        if($_SESSION['usuario']->getIdTu() == 1)
        {
            if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['con_usu']) && !empty($_POST['con_usu']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['lastname']) && !empty($_POST['lastname']) && isset($_POST['region']) && !empty($_POST['region']) && isset($_POST['id_tu']) && !empty($_POST['id_tu']))
            {
                $email = $_POST['email'];
                $con_usu = $_POST['con_usu'];
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $region = $_POST['region'];
                $id_tu = $_POST['id_tu'];

                $instancia = new Admin_model();
                if(!($instancia->checkEmail($email)))
                {
                    if($instancia->addRegistro($email, $con_usu, $name, $lastname, $region, $id_tu))
                    {
                        header('Location: '.ROOT_URL.'users/?success');
                    }
                    else header('Location: '.ROOT_URL.'users/?error');
                }
                else header('Location: '.ROOT_URL.'users/?errore');
            }
            else header('Location: '.ROOT_URL.'users/');
        }
        else header('Location: '.ROOT_URL);

        exit();
    }

    public static function deleteUser($id)
    {
        session_start(); 
        if(!isset($_SESSION['usuario'])) header('Location: '.ROOT_URL.'login/');

        if($_SESSION['usuario']->getIdTu() == 1)
        {
            $instancia = new Admin_model();
            if($instancia->checkUser($id))
            {
                if($instancia->deleteUserById($id)) header('Location: '.ROOT_URL.'users/?deleted');
                else header('Location: '.ROOT_URL.'users/?deletede');
            }
            else header('Location: '.ROOT_URL.'users/?deletede');
        }
        else header('Location: '.ROOT_URL);
        
        exit();
    }

    public static function editPass()
    {
        session_start();
        if(!isset($_SESSION['usuario'])) header('Location: '.ROOT_URL.'login/');

        if(isset($_POST['idU']) && !empty($_POST['idU']) && isset($_POST['con_usu']) && !empty($_POST['con_usu']))
        {
            $id_usu = $_POST['idU'];
            $con_usu = $_POST['con_usu'];

            $instancia = new Admin_model();
            if($instancia->checkUser($id_usu))
            {
                if($instancia->updatePass($id_usu, $con_usu))
                {
                    $_SESSION['usuario']->setIdEst(1);
                    header('Location: '.ROOT_URL.'?pupdated');
                }
                else header('Location: '.ROOT_URL.'?perror');
            }
            else header('Location: '.ROOT_URL);
        }
        else header('Location: '.ROOT_URL.'?pempty');

        exit();
    }

    public static function error_404()
    {
        $pageName = '404';
        include VIEWS_PATH.'404.php';
        exit();
    }

}