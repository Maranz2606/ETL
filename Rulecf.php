<?php
require_once './Ruleset.php';
class Rulecf extends Ruleset
{
    
     function getData()
    {        
        
        foreach ($this->dataset->getData() as $data ){
            if (strlen($data->value)==16){
               return "c'è un codice fiscale";
            }
        }
    }

    
     function setData(string $file)
    {
        
    }

    
}

?>