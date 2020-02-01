<?php
require_once './Ruleset.php';
class Rulemail extends Ruleset
{

    function getData()
    {

        foreach ($this->dataset->getData() as $data) {
            if ($data->field == "mail") { 
            if (filter_var($data->value, FILTER_VALIDATE_EMAIL)) {
                echo  "la mail alla cella " . $data->coor . " è corretta <br>";
            } else {
                echo "la mail " . $data->value . " alla cella " . $data->coor . " è sbagliata <br>";
            }
        }
    }
}

function setData(string $file)
{ }
}
