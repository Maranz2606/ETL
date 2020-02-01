<?php
require_once './Ruleset.php';
class Ruleempty extends Ruleset
{
    function executeCheck()
    {
        foreach ($this->dataset->getData() as $data) {
            
                if (is_null($data->value)) {
                    echo "il campo " . $data->field . " alla cella " . $data->coor . " è vuoto <br>";
                
            }
        }
    }

    function setData(string $file){}
    function getData(){}

}
