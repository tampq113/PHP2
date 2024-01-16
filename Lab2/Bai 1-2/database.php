<?php
namespace Core;
use mysqli;
class  database{
    public function __construct()
    {
        $severname = "localhost";
        $username = "root";
        $password = "mysql";
        $conn = new mysqli($severname,$username,$password);
        if (!$conn) {
            die("Connection failed: ".$conn->connect_error());
        }echo "Connection";
    }
    public function helleWorld(){
        echo "Hello World";
    }
}