<?php
include_once "Conector/BaseDatos.php";

class Persona{
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeoperacion;

    public function __construct(){
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
    }

    public function cargar($nro, $nomb, $ape, $fecha, $tel, $dom){
        $this->setNroDni($nro);
        $this->setApellido($ape);
        $this->setNombre($nomb);
        $this->setFechaNac($fecha);
        $this->setTelefono($tel);
        $this->setDomicilio($dom);
    }

    public function getNroDni(){
        return $this->nroDni;
    }
    
    public function getApellido(){
        return $this->apellido;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getFechaNac(){
        return $this->fechaNac;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    public function getMensajeoperacion(){
        return $this->mensajeoperacion;
    }

    public function setNroDni($valor){
        $this->nroDni = $valor;
    }
    
    public function setApellido($valor){
        $this->apellido = $valor;
    }

    public function setNombre($valor){
        $this->nombre = $valor;
    }

    public function setFechaNac($valor){
        $this->fechaNac = $valor;
    }

    public function setTelefono($valor){
        $this->telefono = $valor;
    }

    public function setDomicilio($valor){
        $this->domicilio = $valor;
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
        $sql="SELECT * FROM persona WHERE NroDni = '".$this->getNroDni()."'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->cargar($row['NroDni'], $row['Apellido'],$row['Nombre'],$row['fechaNac'],$row['Telefono'],$row['Domicilio']);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("Persona->listar: ".$base->getError());
        }
        return $resp;
    
        
    }
    

	public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM persona ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Persona();
                    $obj->cargar($row['NroDni'], $row['Apellido'],$row['Nombre'],$row['fechaNac'],$row['Telefono'],$row['Domicilio']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setMensajeoperacion("Persona->listar: ".$base->getError());
        }
 
        return $arreglo;
    }

	
	
	public function insertar(){
        //echo "insertar";
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO persona(NroDni,Apellido,Nombre,fechaNac,Telefono,Domicilio) 
		 VALUES('".$this->getNroDni()."','".$this->getApellido()."','".$this->getNombre()."','".$this->getFechaNac().
		 "','".$this->getTelefono()."','".$this->getDomicilio()."');";
        if ($base->Iniciar()) {
            
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeoperacion("Persona->insertar: ".$base->getError());
            }
        } else {
            $this->setMensajeoperacion("Persona->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        
        $sql="UPDATE persona SET Apellido='".$this->getApellido()."',Nombre='".$this->getNombre()."',fechaNac='"
		.$this->getFechaNac()."',Telefono='".$this->getTelefono()."',Domicilio='".$this->getDomicilio()."' WHERE NroDni='"
		.$this->getNroDni()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeoperacion("Persona->modificar: ".$base->getError());
            }
        } else {
            $this->setMensajeoperacion("Persona->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM persona WHERE NroDni=".$this->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensajeoperacion("Persona->eliminar: ".$base->getError());
            }
        } else {
            $this->setMensajeoperacion("Persona->eliminar: ".$base->getError());
        }
        return $resp;
    }

	public function __toString(){
	    return "\nNroDni: ".$this->getNroDni(). "\nNombre: ".$this->getNombre().", ".$this->getApellido().
        "\nTelefono: ".$this->getTelefono()."\nDomicilio: ".$this->getDomicilio().
		"\nFecha de nacimiento :".$this->getFechaNac()."\n<<>>\n";
			
	}
}



?>