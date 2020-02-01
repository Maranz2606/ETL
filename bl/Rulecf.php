<?php
require_once './Ruleset.php';
class Rulecf extends Ruleset
{
    
     function getData()
    {        
        
        foreach ($this->dataset->getData() as $data ){
            if ($data->field == "codice fiscale" && strlen($data->value)!=16){
               echo  "il codice fiscale alla cella ".$data->coor." è sbagliato <br>";
            }
        }
    }

    
     function setData(string $file)
    {
        
    }

    
}

?>