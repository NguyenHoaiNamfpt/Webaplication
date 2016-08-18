<?php
include $_SERVER['DOCUMENT_ROOT']."/vidu/model/DB.php";
class SanPham{
    private $id;
    private $tenSanPham;
    private $hinhAnh;
    private $gia;
    private $connection;
    
    public function __construct() {
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
    public function setTenSanPham($ten){
        $this->tenSanPham = $ten;
    }
    public function getTenSanPham(){
        return $this->tenSanPham;
    }
    public function setHinhAnh($hinh){
        $this->hinhAnh = $hinh;
    }
    public function getHinhAnh(){
        return $this->hinhAnh;
    }
    public function setGia($gia){
        $this->gia = $gia;
    }
    public function getGia(){
        return $this->gia;
    }
    
    public function getSanPham(){
        $arrData = array();
        $sql = "SELECT * FROM sanpham";
        $result = $this->connection->query($sql);
        while($arr = mysqli_fetch_assoc($result)){
            $sp = new SanPham();
            $sp->id = $arr["id"];
            $sp->tenSanPham = $arr["tensanpham"];
            $sp->hinhAnh = $arr["hinhanh"];
            $sp->gia = $arr["gia"];
            array_push($arrData, $sp);
        }
        return $arrData;
    }
}
?>