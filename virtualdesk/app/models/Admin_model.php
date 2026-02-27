<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed'); require_once MODEL_PATH.'DB_model.php'; include_once CONTROLLER_PATH.'class/User.php';

class Admin_model extends DB_model
{
	private $arrayAux;

	function __construct()
	{        
		parent::__construct();
		$this->arrayAux = array();
	}

    public function checkAccess($email, $pass)
    {
        try
        {
            $sentencia = 'SELECT email, AES_DECRYPT(con_usu, :key) AS pass FROM m_usuario WHERE (email = :email) AND (AES_DECRYPT(con_usu, :key) = :pass) AND (id_est = 1 OR id_est = 0)';
            $query = $this->db->prepare($sentencia);
            $query->execute(array(':key' => PRIVKEY, ':email' => $email, ':pass' => $pass));
            while($datos = $query->fetch(PDO::FETCH_ASSOC))
            {
                return (!(strcmp($email,$datos['email'])) && !(strcmp($pass,$datos['pass'])));
            }
        }
        catch(Exception $ex)
        {
            //echo 'Error: '.$ex->getMessage();
            return false;
        }
        finally
        {
            $query->closeCursor();
        }
    }

    public function checkEmail($email)
    {
        try
        {
            $sentencia = 'SELECT email FROM m_usuario WHERE (email = ?)';
            $query = $this->db->prepare($sentencia);
            $query->execute(array($email));
            while($datos = $query->fetch(PDO::FETCH_ASSOC))
            {
                return (!(strcmp($email,$datos['email'])));
            }
        }
        catch(Exception $ex)
        {
            //echo 'Error: '.$ex->getMessage();
            return false;
        }
        finally
        {
            $query->closeCursor();
        }
    }

    public function checkUser($id_usu)
    {
        try
        {
            $sentencia = 'SELECT id_usu FROM m_usuario WHERE (id_usu = ?)';
            $query = $this->db->prepare($sentencia);
            $query->execute(array($id_usu));
            while($datos = $query->fetch(PDO::FETCH_ASSOC))
            {
                return (!(strcmp($id_usu,$datos['id_usu'])));
            }
        }
        catch(Exception $ex)
        {
            //echo 'Error: '.$ex->getMessage();
            return false;
        }
        finally
        {
            $query->closeCursor();
        }
    }

    public function addRegistro($email, $con_usu, $name, $lastname, $region, $id_tu)
    {
        try
        {
            $sentencia = 'INSERT INTO m_usuario (email, con_usu, name, lastname, region, id_tu, id_est) VALUES(?,AES_ENCRYPT(?,?),?,?,?,?,?)';
            $query = $this->db->prepare($sentencia);
            $query->execute(array($email, $con_usu, PRIVKEY, $name, $lastname, $region, $id_tu, 1));
            $query->closeCursor();
            return true;
        }
        catch(Exception $ex)
        {
            //echo 'Error: '.$ex->getMessage();
            return false;
        }
    }

    public function updatePass($id_usu, $con_usu)
    {
        try
        {
            $sentencia = 'UPDATE m_usuario SET con_usu = AES_ENCRYPT(?,?), id_est = 1 WHERE (id_usu = ?)';
            $query = $this->db->prepare($sentencia);
            $query->execute(array($con_usu, PRIVKEY, $id_usu));
            $query->closeCursor();
            return true;
        }
        catch(Exception $ex)
        {
            //echo 'Error: '.$ex->getMessage();
            return false;
        }
    }

    public function getUsers()
    {
        try
        {
            $sentencia = 'SELECT id_usu, email, name, lastname, region, id_tu, id_est, created_at FROM m_usuario';
            $query = $this->db->prepare($sentencia);
            $query->execute(array());
            while($datos = $query->fetch(PDO::FETCH_ASSOC))
            {
                $user = new User();
                $user->setIdUsu($datos['id_usu']);
                $user->setEmail($datos['email']);
                $user->setName($datos['name']);
                $user->setLastName($datos['lastname']);
                $user->setRegion($datos['region']);
                $user->setIdTu($datos['id_tu']);
                $user->setIdEst($datos['id_est']);
                $user->setCreatedAt($datos['created_at']);

                $this->arrayAux[] = $user;
            }
            return $this->arrayAux;
        }
        catch(Exception $ex)
        {
            echo 'Error: '.$ex->getMessage();
        }
        finally
        {
            $this->arrayAux = null;
        }
    }

    public function getUserByEmail($email)
    {
        try
        {
            $sentencia = 'SELECT id_usu, email, name, lastname, region, id_tu, id_est, created_at FROM m_usuario WHERE email = ?';
            $query = $this->db->prepare($sentencia);
            $query->execute(array($email));
            while($datos = $query->fetch(PDO::FETCH_ASSOC))
            {
                $user = new User();
                $user->setIdUsu($datos['id_usu']);
                $user->setEmail($datos['email']);
                $user->setName($datos['name']);
                $user->setLastName($datos['lastname']);
                $user->setRegion($datos['region']);
                $user->setIdTu($datos['id_tu']);
                $user->setIdEst($datos['id_est']);
                $user->setCreatedAt($datos['created_at']);

                return $user;
            }
            return null;
        }
        catch(Exception $ex)
        {
            //echo 'Error: '.$ex->getMessage();
            return null;
        }
        finally
        {
            $this->arrayAux = null;
        }
    }

    public function deleteUserById($id_usu)
    {
        try
        {
            $sentencia = 'DELETE FROM m_usuario WHERE id_usu = ?';
            $query = $this->db->prepare($sentencia);
            $query->execute(array($id_usu));
            $query->closeCursor();
            return true;
        }
        catch(Exception $ex)
        {
            //echo 'Error: '.$ex->getMessage();
            return false;
        }
    }

}