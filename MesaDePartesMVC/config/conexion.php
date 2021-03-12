<?php
//Sesión es para detectar que un usuario este logeado en el sistema y lanza una variable para indicarlo:
session_start();
class Conectar
{
    protected $dbh; //Proteger nuestra cadena de conexión y comandos.

    protected function Conexion()
    {
        try {
            $conectar = $this->dbh = new PDO("mysql:host=127.0.0.1;dbname=MesaDePartes", "root", "Ag04071997");

            return $conectar;
        } catch (Exception $e) {
            print "¡Error Mesa de Partes BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public function ruta()
    {
        return "http://localhost/MesaDePartes/MesaDePartesMVC/";
    }
}
?>