<?php
class EstudianteDAO{
    private $codigo;
    private $nombre; 
    private $apellido;
    private $fecha_nacimiento;
        
    public function EstudianteDAO($codigo="", $nombre="", $apellido="", $fecha_nacimiento=""){
        $this -> codigo = $codigo;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> fecha_nacimiento = $fecha_nacimiento;
    }

    
    public function crear(){
        return "insert into datose(codigo, nombre, apellido, fecha)
            values('" . $this -> codigo . "', '" . $this -> nombre . "', '" . $this -> apellido . "', '" . $this -> fecha . "')";
    }
    
    public function consultarTodos(){
        return "select codigo, nombre, apellido, fecha 
                from datose";
    }
    
    
}
?>


