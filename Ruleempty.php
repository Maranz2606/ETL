<?php
require_once './Ruleset.php';
class Ruleempty extends Ruleset
{
    function getData()
    {
        foreach ($this->dataset->getData() as $data){
            if (is_null($data->value)){
                echo "c'è un campo vuoto alla casella" .$data->coor;
            }
        }    
    }

    function setData(string $file)
    {

    }

    

}


?>