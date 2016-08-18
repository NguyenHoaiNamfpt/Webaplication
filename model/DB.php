<?php
class DB{
    
    private $sqlConnecttionl;
    
    public function getConnect(){
        $mysqli = new mysqli("localhost", "root", "", "asiment1");
        if(mysqli_connect_error()){
            return NULL;
        }
        else{
            $mysqli->set_charset("UTF8");
            return $mysqli;
        }
    } 
}
?>