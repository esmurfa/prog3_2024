<?php

class examPrevius{
    private $idExamPrevius = null;
    private $date=null;
    private $grade =null;
    private $remarks =null;

    public function addExamPrevius(){   

    }
    public function deleteExamPrevius(){
        
    }
    public function editExamPrevius(){
        
    }
    public function updateExamPrevius(){
        
    }
    public function getExamPrevius(){
        
    }
    public function getAllExamPrevius(){
        
    }
    //funcion para que un estudiante pida mesa de examen
    public function takeExamPrevious(){

    }
    //funcion para que un profesor ponga la calificaion de un examen
    public function gradeExamPrevious(){

}
//getter // setter
public function getIdExamPrevius(){
    return $this->idExamPrevius;

}

public function setIdExamPrevius($idExamPrevius){
    $this->idExamPrevius=$idExamPrevius;

}
public function getDate(){
    return $this->date;

}

public function setDate($date){
    $this->date=$date;

}

public function getGrade(){
    return $this->grade;

}

public function setGrade($grade){
    $this->grade=$grade;

}
public function getremarks(){
    return $this->remarks;

}

public function setRemarks($remarks){
    $this->remarks=$remarks;

}
}

?>