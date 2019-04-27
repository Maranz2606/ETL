<?php

require_once("./Data.php");
require_once("./Rulecf.php");
require_once("./Rulemail.php");
require_once("./Ruleempty.php");


$data = new Data();

$data->setData("test.xlsx");

var_dump( $data->getHeader());
var_dump( $data->getData());

$rulecf = new Rulecf($data);
$rulemail =  new Rulemail($data);
$ruleemprty = new Ruleempty($data);
$ruleemprty->getData();
 $rulecf->getData(); 
 $rulemail->getData();


?>