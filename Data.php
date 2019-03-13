<?php
require 'C:/Users/fisso/vendor/autoload.php';
require_once './Dataset.php';

class Data implements Dataset
{

    private $data = array();
   
    public function getData()
    {
        return $this->data;
    }

    
    public function setData(string $file)
    {
        
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load($file);
        
        foreach ($spreadsheet->getActiveSheet()->getRowIterator() as $row) {
            
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(FALSE);
        }
        
        
        foreach ($cellIterator as $cell) {
            array_push($this->data, $cell->getValue());
        }
        
       
        
    }

    
    
   

   
  
}


?>