<?php

abstract class Ruleset implements Dataset
{

    protected $dataset;

    public function __construct(Dataset $dataset)
    {
        $this->dataset = $dataset;
    }
    
    abstract function getData();
    abstract function setData(string $file);
    
    
}

