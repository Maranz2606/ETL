<?php
require_once './Ruleset.php';
class Rulemail extends Ruleset
{

    function getData()
    {
        foreach ($this->dataset->getData() as $data) {
            if (filter_var($data->value,FILTER_VALIDATE_EMAIL)) {
                return "l'email inserita è corretta";
            }
        }
    }

    function setData(string $file)
    {}
}

