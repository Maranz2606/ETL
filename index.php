<?php

require_once("./Data.php");
require_once("./Rulecf.php");
require_once("./Rulemail.php");
require_once("./Ruleempty.php");

// foreach(glob("path/to/my/dir/*.php") as $file){
//     require $file;
// }

$data = new Data();

$data->setData("test.xlsx");

var_dump( $data->getHeader());
var_dump( $data->getData());

$rulecf = new Rulecf($data);
$rulemail =  new Rulemail($data);
$ruleemprty = new Ruleempty($data);
echo $ruleemprty->getData();
echo $rulecf->getData(); 
echo $rulemail->getData();


?>