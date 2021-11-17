<?php
class FileHandler{
    private $target_dir = "uploads/";
    private $file_name;
    private $file_ext;
    private $target_path;
    private $tmp_name;

    public function __construct(Array $file_received){
        $this->file_name = $file_received['name'];
        $this->file_ext = strtolower(pathinfo($this->getFileName(),PATHINFO_EXTENSION));
        $this->tmp_name = $file_received['tmp_name'];
        $this->target_path = $this->getTargetDir() . basename($this->getFileName());
    }
    private function getTmpName(){
        return $this->tmp_name;
    }
    public function getFileName(){
        return $this->file_name;
    }
    public function getTargetDir(){
        return $this->target_dir;
    }
    public function getFileExt(){
        return $this->file_ext;
    }
    public function getTargetPath(){
        return $this->target_path;
    }
    public function checkExtension(){
        if($this-> getFileExt() != "xls" && $this-> getFileExt() != "xlsx"){
            exit(header("Location:./exception.php?failure_code=1"));
        }
    }
    public function uploadFile(){
        if (move_uploaded_file($this->getTmpName(), $this->getTargetPath())) {
            echo "File caricato correttamente \n";
        } else {
            exit(header("Location:./exception.php?failure_code=2"));        
        }
    }
}
?>