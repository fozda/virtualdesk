<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed');



class DB_model 

{

    /**

     * DB Connection

     * @var Object

     */

    protected $db;



    /**

     * __construct

     * @return $db

     */

    function __construct()
    {
        try
        {
            $this->db = new PDO('mysql:host=localhost; dbname=dmd74250_virtual_desk', 'dmd74250_vd_user', 'QuvA=$Qn;}a8');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->exec('SET CHARACTER SET utf8');
            return $this->db;
        }
        catch(Exception $ex)
        {
            die('Error: '.$ex->getMessage());
        }
    }
}