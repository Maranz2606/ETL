<?php
require_once './Ruleset.php';
class Rulecity extends Ruleset
{
    function getData()
    {

        $file = json_decode(file_get_contents("nations.json"));
       $cityArray =  array_column($file->locationCity, 'name');
        foreach ($this->dataset->getData() as $data) {
            
                if ($data->field == "città"   && array_search($data->value,$cityArray)== false){
                    echo "il campo " . $data->field . " alla cella " . $data->coor . " contiene una città non presente nel database";
                }
            
        }
    }


    function setData(string $file)
    { }
}
