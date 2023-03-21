<?php

class MyDB{

    public $conectionstring;
    public $conn;
    public $DB_mensaje;
    public $array_empleados;
    public $resul;


    
    public function Conectar($dbName, $Server){
        $this->conectionstring = array( "Database"=>$dbName);
        $this->conn = sqlsrv_connect($Server, $this->conectionstring);

        if($this->conn){
            $this->SetMensajes(1);
            return true;
        }
        $this->SetMensajes(0);
        return false;
        
    }

    public function CerrarDB($ConectionID){
        //Cierre de la conexión
        sqlsrv_close($ConectionID);
        $this->SetMensajes(2);
    }

    public function Get_TopEmpleados_Aniversario($ConectionID, $Query){
        $this->resul = sqlsrv_query($ConectionID, $Query);
        if($this->resul){
            $this->SetMensajes(3);

        }else{
            $this->SetMensajes(4);
        }
        
    }

    public function SetMensajes($ID_mensaje){
        switch ($ID_mensaje) {
            case 0:
                $this->DB_mensaje = "Conexión fallida";
                break;

            case 1:
                $this->DB_mensaje = "Conexión exitosa";
                break;

            case 2:
                $this->DB_mensaje = "Conexió cerrada";
                break;

            case 3:
                $this->DB_mensaje = "Registros encontrados";
                break;
            
            case 4:
                $this->DB_mensaje = "Registro No encontrado";
                break;

            case 5:
                $this->DB_mensaje = "Se ha insertado el empleado correctamente";
                break;
            case 6:
                $this->DB_mensaje = "No fue posible insertar los datos";
                break;
            case 7:
                $this->DB_mensaje = "Registro actualizado!";
                break;
            case 8:
                $this->DB_mensaje = "No fue posible actualizar el registro.";
                break;
            case 9:
                $this->DB_mensaje = "Se ha insertado el nuevo mensaje.";
                break;

            
        }
    }

    public function BuscarEmpleados_Creterio($ConectionID, $Query){

        $this->resul = sqlsrv_query($ConectionID, $Query);
        //echo $this->resul;
        if($this->resul){
            $this->SetMensajes(3);
        }else{
            $this->SetMensajes(4);
        }
    }

    public function SetFoto($ConectionID,$Query){
        $this->resul = sqlsrv_query($ConectionID, $Query);
        if($this->resul){
            $this->SetMensajes(3);

        }else{
            $this->SetMensajes(4);
        }
    }

    public function setEmpleado($ConectionID, $Query){
        $this->resul = sqlsrv_query($ConectionID, $Query);
        if($this->resul){
            $this->SetMensajes(5);

        }else{
            $this->SetMensajes(6);
        }
    }

    public function getCustomMSG($ConectionID, $Query){
        $this->resul = sqlsrv_query($ConectionID, $Query);
        if($this->resul){
            $this->SetMensajes(3);

        }else{
            $this->SetMensajes(4);
        }
    }

    public function SetMsg($ConectionID, $Query){
        $this->resul = sqlsrv_query($ConectionID, $Query);
        if($this->resul){
            $this->SetMensajes(7);

        }else{
            $this->SetMensajes(8);
        }
    }

    public function GetMsg($ConectionID, $Query){
        $this->resul = sqlsrv_query($ConectionID, $Query);
        if($this->resul){
            $this->SetMensajes(7);

        }else{
            $this->SetMensajes(8);
        }
    }

    public function SetMensaje_empleado($ConectionID, $Query){
        $this->resul = sqlsrv_query($ConectionID, $Query);
        if($this->resul){
            $this->SetMensajes(7);

        }else{
            $this->SetMensajes(8);
        }
    }

    public function AddMensaje($ConectionID, $Query){
        $this->resul = sqlsrv_query($ConectionID, $Query);
        if($this->resul){
            $this->SetMensajes(9);

        }else{
            $this->SetMensajes(6);
        }
    }
}

?>
