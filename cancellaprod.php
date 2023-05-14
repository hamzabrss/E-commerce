<?php
include "connection.php";
session_start();
   $cancella=$_GET["canc"];
    $sql= "DELETE FROM prodotto WHERE ID ='$cancella'";
    
    $result= $conn->query($sql);

    

        

        header('location:product.php?');
    
    

    $conn->close();
?>