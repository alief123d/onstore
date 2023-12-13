<?php
class koneksi {

    public function DBconnect(){
        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "latihan";
        
        try {
            $dbConnection = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
            $dbConnection->exec("set names utf8");
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return  $dbConnection;
        }
        catch (PDOException $e) {
            return 'Connection failed: ' . $e->getMessage();
        }
    }
}

?>