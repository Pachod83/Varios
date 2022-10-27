<?php


class Automoviles
{

	//Conexion 

	private $conn;
	private $tablename = "vehiculos";

    //Columnas
	public $placa;
	public $modelo;
	public $id;
	public $nombre;
	public $fechanac;
	public $sexo;
    public $tipo_pro;
    public $departamento;

    // Construuctor de Clase
    
    public function __construct($db)
    {
    	$this->conn = $db;
    }




    // Get automoviles

        public function getEmployees(){
           $sqlQuery = "SELECT placa, modelo, id, nombre, fecha_nac, sexo, tipo_pro, departamento FROM " . $this->db_table ."";
           $stmt = $this->conn->prepare($sqlQuery);
           $stmt->execute();
            return $stmt;
        }



    // Crear un empleados
        public function createEmployee(){
            $sqlQuery = "INSERT INTO
                        ". $this->tablename ."
                    SET
                    placa = :placa, 
                    modelo = :modelo, 
                    id = :id, 
                    nombre = :nombre, 
                    fecha_nac = :fecha_nac,
                    sexo = :sexo, 
                    tipo_pro = :tipo_pro, 
                    departamento = :departamento";
                    

        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->placa=htmlspecialchars(strip_tags($this->placa));
            $this->modelo=htmlspecialchars(strip_tags($this->modelo));
            $this->id=htmlspecialchars(strip_tags($this->id));
            $this->nombre=htmlspecialchars(strip_tags($this->nombre));
            $this->fecha_nac=htmlspecialchars(strip_tags($this->fecha_nac));
            $this->sexo=htmlspecialchars(strip_tags($this->sexo));
            $this->tipo_pro=htmlspecialchars(strip_tags($this->tipo_pro));
            $this->departamento=htmlspecialchars(strip_tags($this->departamento));
            
          
        
            // bind data
            $stmt->bindParam(":placa", $this->placa);
            $stmt->bindParam(":modelo", $this->modelo);
            $stmt->bindParam(":id", $this->id);
            $stmt->bindParam(":nombre", $this->nombre);
            $stmt->bindParam(":fecha_nac", $this->fecha_nac);
            $stmt->bindParam(":sexo", $this->sexo);
            $stmt->bindParam(":tipo_pro", $this->tipo_pro);
            $stmt->bindParam(":departamento", $this->departamento);
            
            
           
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }


}

?> 