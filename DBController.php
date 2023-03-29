<?php
class DBController {

    private $host = "localhost";
    private $user="root";
    private $pass = "";
    private $database = "products";

    function __construct(){
        $this->conn = $this->connectDB();
        if(!empty($this->conn)){
            $this->selectDB();
        }
    }

    function connectDB(){
        $conn = mysqli_connect($this->host,$this->user,$this->pass,$this->database);
        return $conn;
    }

    function selectDB(){
        mysqli_select_db($this->conn,$this->database);
    }

    function runQuery($query){
        $result = mysqli_query($this->conn,$query);

        while($row=mysqli_fetch_assoc($result)){
            $restltset[] = $row;
        }
        if(!empty($restltset)) {
            return $restltset;
        }        
    }

    function numRows($query){
        $result = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    function insert($query){
        $insert_id="";
        $result = mysqli_query($this->conn,$query);
        if(!empty($result)){
            $insert_id = mysqli_insert_id($this->conn);
        }
        return $insert_id;
    }

    function execute($query){
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    function CloseCon($conn) {
        $conn->close();
    }
}

?>