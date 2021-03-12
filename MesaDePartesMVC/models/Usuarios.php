<?php
class Usuarios extends Conectar{
    public function login(){
        $conectar = parent::Conexion();
        parent::set_names();
        if(isset($_POST["enviar"])){

            $password=$_POST["password"];
            $correoElectronico=$_POST["correoElectronico"];

            if(empty($correoElectronico) and empty($password)){
                header("Location:".Conectar::ruta()."index.php?m=2");
                exit();
            }
            else{
                $sql="select * from tm_usuarios where CorreoElectronico=? and Password=? and Estado=1";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$correoElectronico);
                $sql->bindValue(2,$password);
                $sql->execute();
                $resultado=$sql->fetch();
                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["UsuarioID"] = $resultado["UsuarioID"];
                        $_SESSION["NombreUsuario"] = $resultado["NombreUsuario"];
                        $_SESSION["ApellidoUsuario"] = $resultado["ApellidoUsuario"];
                        $_SESSION["CorreoElectronico"] = $resultado["CorreoElectronico"];
                        header("Location:".Conectar::ruta()."view/Home/");
                        exit(); 
                    }
                    else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
            }
        }
    }
}
?>