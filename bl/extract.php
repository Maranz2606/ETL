<?php
include("./../endpoint/FileHandler.php");
session_start();
foreach(glob("./*.php") as $file){
    require_once $file;
}
$data = new Data();
$file_name = $_SESSION["fileHandler"]->getFileName();
$rule_list = isset($_POST['rule']) ? $_POST['rule'] : array();

$data->setData("./../endpoint/uploads/". $file_name);

var_dump( $data->getHeader());
var_dump( $data->getData());

foreach($rule_list as $rule){
    $rule_cf = new $rule($data);
    $rule_cf->executeCheck(); 
}
?>