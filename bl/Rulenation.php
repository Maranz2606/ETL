<?php
require_once './Ruleset.php';
class Rulenation extends Ruleset
{
    function getData()
    {

        $file = json_decode(file_get_contents("nations.json"));
       $nationsArray =  array_column($file->country, 'name');
        foreach ($this->dataset->getData() as $data) {
            
                if ($data->field == "città"   && array_search($data->value,$nationsArray)== false){
                    echo "il campo " . $data->field . " alla cella " . $data->coor . " contiene una nazione non presente nel database";
                }
            
        }
    }


    function setData(string $file)
    { }
}
