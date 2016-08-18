<?php
include $_SERVER['DOCUMENT_ROOT']."/vidu/model/DanhMuc.php";
include $_SERVER['DOCUMENT_ROOT']."/vidu/model/SanPham.php";
class Controller{
    private $control;
    private $action;
    
    public function __construct() {
        
    }
    
    private function getControl(){
        if(isset($_GET["control"]) && $_GET["control"]!=NULL){
            return $_GET["control"];
        }
        else{
            return "index";
        }
    }
   
    public function menu(){
        $ojbDanhMuc = new DanhMuc();
        $arrData = $ojbDanhMuc->getDanhMuc();
        include $_SERVER['DOCUMENT_ROOT']."/vidu/view/template/menu.php";
    }
    
    public function control(){
        
        if($this->getControl() == "index"){
            $ojbDSanPham = new SanPham();
            $arrData = $ojbDSanPham->getSanPham();
            include $_SERVER['DOCUMENT_ROOT']."/vidu/view/index/ca.php";
        }
        else{
            include $_SERVER['DOCUMENT_ROOT']."/vidu/view/index/error.php";
        }
    }
}
?>