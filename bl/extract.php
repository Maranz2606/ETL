<?php

foreach(glob("./*.php") as $file){
    require_once $file;
}
$data = new Data();

$data->setData("./../endpoint/uploads/test.xlsx");

var_dump( $data->getHeader());
var_dump( $data->getData());

$rulecf = new Rulecf($data);
$rulemail =  new Rulemail($data);
$ruleemprty = new Ruleempty($data);
$rulecity = new Rulecity($data);
$reulenation = New Rulenation($data);
$ruleemprty->getData();
 $rulecf->getData(); 
 $rulemail->getData();
 $rulecity-> getData();
 $reulenation-> getData();


?>