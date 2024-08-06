<?php
include_once("../model/examPrevious.controller.class.php")
$operacion=$_REQUEST["operation"];

switch ($operation) {
    case "get":

        break;
    case "add":
        echo "El valor es valor2";
        break;
    case "edit":
        echo "El valor es valor3";
        break;
    case "update":
        echo "El valor es valor3";
        break;
        
    default:
        echo "El valor no coincide con ninguno de los casos";
        break;
}
?>
