<?php
    $cn = new mysqli("localhost","root","","loginform"); 

    // if($cn ->connect_error){
    //     die("Error connection to database " .$cn->connect_error);
    // }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM grud_database WHERE id =$id";

        $cn -> query($sql);
    }
    header('location: ./index.php');
    exit;

?>