<?php
require 'C:/Users/Maranz/vendor/autoload.php';  //TABLET
//require 'C:/Users/fisso/vendor/autoload.php';  //PC FISSO
require_once './Dataset.php';

class Data implements Dataset
{

    private $data = array();
    private $header = array();

    public function getData()
    {
        return $this->data;
    }

    public function getHeader(){
        return $this->header;
    }


    public function setData(string $file)
    {

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load($file);
        $highestCol = ord($spreadsheet->getActiveSheet()->getHighestColumn())-64;   // A = 65
        $col = 0;                                                                   // contatore per assegnare il nome del campo ad ogni cella

        foreach ($spreadsheet->getActiveSheet()->getRowIterator() as $row) {

            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(FALSE);                      // cicla le caselle vuote 

            foreach ($cellIterator as $cell) {
                
                
                $obj = new \stdClass();
                $obj->value = $cell->getValue();
                $obj->coor = $cell->getCoordinate();
               
                json_encode($obj);

                if (count($this->header)<$highestCol) {
                    
                    array_push($this->header, $obj);
                    
                }
                else{
                    $obj->field = $this->header[$col]->value;
                    array_push($this->data, $obj);
                    $col ++;
                    if ($col == $highestCol){
                        $col = 0;
                    }
                }
            }
        }
    }
}
