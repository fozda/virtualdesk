<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed');

class User
{
	private $id_usu;
	private $email;
	private $con_usu;
	private $name;
	private $lastname;
	private $region;
	private $id_tu;
	private $id_est;
	private $created_at;

	public function setIdUsu($id_usu)
    {
        $this->id_usu = $id_usu;
    }

    public function getIdUsu()
    {
        return $this->id_usu;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setConUsu($con_usu)
    {
        $this->con_usu = $con_usu;
    }

    public function getConUsu()
    {
        return $this->con_usu;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setIdTu($id_tu)
    {
        $this->id_tu = $id_tu;
    }

    public function getIdTu()
    {
        return $this->id_tu;
    }

    public function setIdEst($id_est)
    {
        $this->id_est = $id_est;
    }

    public function getIdEst()
    {
        return $this->id_est;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

}