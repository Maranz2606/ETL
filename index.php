<?php

require_once("./Data.php");
require_once("./Rulecf.php");
require_once("./Rulemail.php");

// foreach(glob("path/to/my/dir/*.php") as $file){
//     require $file;
// }

$data = new Data();

$data->setData("test.xlsx");

print_r( $data->getData());
$rulecf = new Rulecf($data);
$rulemail =  new Rulemail($data);
echo $rulecf->getData(); 
echo $rulemail->getData();

?>