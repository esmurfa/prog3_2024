<?php
include("../model/student.class.php");
$operation=$_REQUEST["operation"];
$id=$_REQUEST["idStudent"];
echo $id;
$student = new Student();

//echo $operacion;
if($operation=="add"){
    $student->setDni($_REQUEST["dni"]);
    $student->setName($_REQUEST["name"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->addStudent();
}else if($operation=="update"){
    $student->setIdStudent($_REQUEST["idStudent"]);
    $student->setDni($_REQUEST["dni"]);
    $student->setName($_REQUEST["name"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->editStudent();
}else if($operation=="delete"){
    $student->getIdStudent($_REQUEST["id"]);
    $student->deleteStudent();
    echo $result
}

?>