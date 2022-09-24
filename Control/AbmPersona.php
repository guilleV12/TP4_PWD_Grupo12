<?php
class AbmPersona{

     /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param){
        //print_r($param);
        $obj = null;
        if( array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param)
         and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param)){
            //echo "Crear Obj";
            $obj = new Persona();
            $obj->cargar($param['NroDni'], $param['Apellido'],$param['Nombre'],$param['fechaNac'],$param['Telefono'],$param['Domicilio']);
        }
        return $obj;
    }

     /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     *  que son claves
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        /* echo print_r($param); */
        if(isset($param['NroDni']) ){
            $obj = new Persona();
            $obj->Buscar($param['NroDni']);
        }
        return $obj;
    }


     /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni']))
            $resp = true;
        return $resp;
    }


    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        //$param['NroDni'] =null;
        $unObjPersona = $this->cargarObjeto($param);
        /* echo "
        verEstructura($unObjPersona); */
        if ($unObjPersona!=null and $unObjPersona->insertar()){
            $resp = true;
        }
        return $resp;
        
    }

    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        /* print_r($param);
        echo "baja"; */
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $unObjPersona = $this->cargarObjetoConClave($param);
            //verEstructura($unObjPersona);
            if ($unObjPersona!=null and $unObjPersona->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        /* print_r($param);
        echo " Modificacion()"; */
        if ($this->seteadosCamposClaves($param)){
            $unObjPersona = $this->cargarObjeto($param);
            //verEstructura($unObjPersona);
            if($unObjPersona!=null and $unObjPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = " true ";
        //print_r($param);
        if ($param<>NULL){
            if  (isset($param['NroDni']))
                $where.=" and NroDni ='".$param['NroDni']."'";
            if  (isset($param['Apellido']))
                 $where.=" and Apellido ='".$param['Apellido']."'";
            if  (isset($param['Nombre']))
                 $where.=" and Nombre ='".$param['Nombre']."'";
        }
        $arreglo = Persona::listar($where);  
        return $arreglo;
    }
}

?>