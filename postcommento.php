<?php
include "connection.php";
session_start();
   $nome=$_GET['nome'];
   $idogg=$_GET['IDogg'];
   $idutente=$_GET['IDUtente'];
   $comm=$_POST['commento'];
   



    $sql= "INSERT INTO `commenti` (`contenutocomm`, `idprod`, `idutente`) VALUES ('$comm', $idogg, $idutente)";
    
    echo $sql;
    $result= $conn->query($sql);

    
        
    header('location:index.php?');   

        
    
    

    $conn->close();
?>