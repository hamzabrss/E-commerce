<?php
include "connection.php";
session_start();
   $cancella=$_GET["canc"];
    $sql= "DELETE FROM carrello WHERE id ='$cancella'";
    
    $result= $conn->query($sql);

    

        

        header('location:shoping-cart.php?');
    
    

    $conn->close();
?>