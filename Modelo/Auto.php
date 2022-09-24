<?php
include_once "Conector/BaseDatos.php";
include_once "Persona.php";

class Auto{
    //atributos
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;
    private $mensajeoperacion;

    //constructor
    public function __construct(){
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->dniDuenio = "";
    }

    public function cargar($pat, $marc, $mod, $dni){
        $this->setPatente($pat);
        $this->setMarca($marc);
        $this->setModelo($mod);
        $this->setDniDuenio($dni);
    }

    public function getPatente(){
        return $this->patente;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getDniDuenio(){
        return $this->dniDuenio;
    }

    public function getMensajeoperacion(){
        return $this->mensajeoperacion;
    }

    public function setPatente($valor){
        $this->patente = $valor;
    }

    public function setMarca($valor){
        $this->marca = $valor;
    }

    public function setModelo($valor){
        $this->modelo = $valor;
    }

    public function setDniDuenio($valor){
        $this->dniDuenio = $valor;
    }

    public function setMensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
    }

    	/**
	 * Recupera los datos de un auto por patente
	 * @param int $patente
	 * @return true en caso de encontrar los datos, false en caso contrario 
	 */		
    public function Buscar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM auto WHERE Patente = '".$this->getPatente()."'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $objDuenio= new Persona();
                    $objDuenio->setNroDni($row['DniDuenio']);
                    $objDuenio->Buscar();
                    $this->cargar($row['Patente'], $row['Marca'],$row['Modelo'],$objDuenio);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("Auto->listar: ".$base->getError());
        }
        return $resp;
    
        
    }
    

	public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro.' ORDER BY Modelo';
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Auto();
                    $objDuenio= new Persona();
                    $objDuenio->setNroDni($row['DniDuenio']);
                    $objDuenio->Buscar();
                    $obj->cargar($row['Patente'], $row['Marca'],$row['Modelo'],$objDuenio);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("Auto->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
    



	public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO auto(Patente,Marca,Modelo,DniDuenio)  VALUES('".$this->getPatente()."','".$this->getMarca()
		."',".$this->getModelo().",'".$this->getDniDuenio()."');";
        if ($base->Iniciar()) {
            
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE auto SET Marca='".$this->getMarca()."',Modelo=".$this->getModelo().",DniDuenio='"
		.$this->getDniDuenio()->getNroDni()."' WHERE Patente='".$this->getPatente()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente=".$this->getPatente();
        //print_r($sql);
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                //echo "eliminar";
                return true;
            } else {
                $this->setmensajeoperacion("Auto->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->eliminar: ".$base->getError());
        }
        return $resp;
    }

	public function __toString(){
	    return "\nPatente: ".$this->getPatente(). "\nMarca:".$this->getMarca()."\nModelo: ".$this->getModelo().
		"\nDni duenio:".$this->getDniDuenio()->getNroDni()."\n<<>>\n";
			
	}
}



?>