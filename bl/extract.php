<?php
session_start();
foreach(glob("./*.php") as $file){
    require_once $file;
}
$data = new Data();
$fileName = $_SESSION["fileName"];
$rule = isset($_POST['rule']) ? $_POST['rule'] : array();

$data->setData("./../endpoint/uploads/". $fileName);

var_dump( $data->getHeader());
var_dump( $data->getData());

$rulecf = new $rule[0]($data);
//$rulemail =  new Rulemail($data);
//$ruleemprty = new Ruleempty($data);
//$rulecity = new Rulecity($data);
//$reulenation = New Rulenation($data);
//$ruleemprty->getData();
 $rulecf->getData(); 
 //$rulemail->getData();
// $rulecity-> getData();
 //$reulenation-> getData();


?>