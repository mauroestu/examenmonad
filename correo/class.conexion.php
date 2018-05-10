<?php
class Conexion extends mysqli
{
	public function __construct()
    {
		parent::__construct('127.0.0.1','root','','examen');
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno == true ? die('Error'): $x='conectado';
	}

    public function recorrer($data)
    {
        return mysqli_fetch_array($data);
    }
}
 ?>
