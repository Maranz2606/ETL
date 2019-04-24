<?php
require 'C:/Users/Maranz/vendor/autoload.php';
//require 'C:/Users/fisso/vendor/autoload.php';
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

        foreach ($spreadsheet->getActiveSheet()->getRowIterator() as $row) {

            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(FALSE);

            foreach ($cellIterator as $cell) {

                $obj = new \stdClass();
                $obj->value = $cell->getValue();
                $obj->coor = $cell->getCoordinate();
                json_encode($obj);

                if (count($this->header)<$highestCol) {
                    array_push($this->header, $obj);
                }
                else{
                array_push($this->data, $obj);
                }
            }
        }
    }
}
