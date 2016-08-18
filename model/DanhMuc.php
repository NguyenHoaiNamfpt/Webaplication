<?php

class DanhMuc{
    private $id;
    private $ten;
    private $connection;
    public function __construct() {
        $ojbConnect = new DB();
        
        $this->connection = new mysqli("localhost", "root", "", "asiment1");
        if(mysqli_connect_error()){
            return;
        }
        else{
            $this->connection->set_charset("UTF8");
            $this->connection;
        }
    }
    
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setTen($ten){
        $this->ten = $ten;
    }
    public function getTen(){
        return $this->ten;
    }

    
    public function getDanhMuc(){
        $arrData = array();
        $sql = "SELECT * FROM danhmuc";
        $result = $this->connection->query($sql);
        while($arr = mysqli_fetch_assoc($result)){
            $dm = new DanhMuc();
            $dm->id = $arr["id"];
            $dm->ten = $arr["tendanhmuc"];
            array_push($arrData, $dm);
        }
        return $arrData;
    }
}
?>