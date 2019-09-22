<?php
require_once './Ruleset.php';
class Rulecity extends Ruleset
{
    function getData()
    {

        $file = file_get_contents("nations.js");
        foreach ($this->dataset->getData() as $data) {
            
                if ($data->field == "nazione" 
                && strpos($file, $data->value) == false) {
                    echo "il campo " . $data->field . " alla cella " . $data->coor . " contiene una nazione non presente nel database";
                
            }
        }
    }

    function setData(string $file)
    { }
}
