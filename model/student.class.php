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

    public function __construct($dni, $surname, $name, $birthdate, $phone, $address, $email, $password, $school, $conexion){
        $this->$dni=$dni;
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
    
        $sql="DELETE FROM Students WHERE idStudent=".$this->idStudent;
    .$this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion-close();

    return $result;

    }
    public function editStuden(){
            $sql="UPDATE Students SET dni=".$this->$dni.", surname='".$this->$surname."', name='".$this->name."'
            , birthdate='".$this->birthdate."', phone= '".$this->phone."', address='".$this->address."',
             email='".$this->email."', password='".$this->password."', school='".$this->school."' WHERE idStudent=".$this->idStudent;
    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion-close();
    
    return $result;
    }
    public function getStuden(){

        $sql="SELECT * FROM Students WHERE idStudent=".$this->idStudent;
    .$this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion-close();

    if($result){
        if($row=$result->fetch_assoc()){
            $this->$dni=$row["dni"];
            $this->$surname=$row["surname"];
            $this->$name=$row["name"];
            $this->$birthdate=["birthdate"];
            $this->$phone=$row["phone"];
            $this->$address=$row["address"];
            $this->$email=$row["email"];
            $this->$password=$row["password"];
            $this->$school=$row["school"];
        return true;
        }
    }
    return false;

    }
    public function getAllStuden(){
        
        $sql="SELECT * FROM Students" ;
    .$this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion-close();

    if($result){
        if($row=$result->fetch_assoc()){
            $this->$dni=$row["dni"];
            $this->$surname=$row["surname"];
            $this->$name=$row["name"];
            $this->$birthdate=["birthdate"];
            $this->$phone=$row["phone"];
            $this->$address=$row["address"];
            $this->$email=$row["email"];
            $this->$password=$row["password"];
            $this->$school=$row["school"];
        return true;
        }
    }
    return false;

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