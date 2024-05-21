<?php 

 class Student{ 

    private $idStudent=null;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $user=null;
    private $password=null;
    private $school=null;
    private $conexion=null;

    public function __construct($dni, $surname, $name, $birthdate, $phone, $address, $email, $user, $password, $school, $conexion){
        $this->$dni=$dni;
        $this->$surname=$surname;
        $this->$name=$name;
        $this->$birthdate=$birthdate;
        $this->$phone=$phone;
        $this->$address=$address;
        $this->$email=$email;
        $this->$user=$user;
        $this->$password=$password;
        $this->$school=$school;
    }

    public function addStuden(){
    //crear la consulta
    $sql="INSERT INTO Students (dni, surname, name, birthdate, phone, address, email, password, school) VALUES
    (".$this->$dni.",'".$this->$surname."','".$this->name."','".$this->birthdate."','".$this->phone."','".$this->address."','".$this->email."','".$this->password."', '".$this->school."')";
    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion-close();

    return $result;

    }
    public function deleteStuden(){
        
    }
    public function editStuden(){
        
    }
    public function getStuden(){
        
    }
    public function getAllStuden(){
        
    }
    //geeter y Setter
    public function getIdStudent(){
        return $this->idStuent;
    }
    public function setIdStudent($idStudent){
        return $this->idStuent;
    }

 }


?>