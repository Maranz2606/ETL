<?php
session_start();
foreach(glob("./*.php") as $file){
    require_once $file;
}
$data = new Data();
$fileName = $_SESSION["fileName"];
$ruleList = isset($_POST['rule']) ? $_POST['rule'] : array();

$data->setData("./../endpoint/uploads/". $fileName);

var_dump( $data->getHeader());
var_dump( $data->getData());

foreach($ruleList as $ruleSelected){
    $rule = new $ruleSelected($data);
    $rule->executeCheck(); 
}
?>