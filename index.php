<?php

require_once("./Data.php");
$dataset = new Data();

$dataset->setData("test.xlsx");

var_dump($dataset->getData());
?>