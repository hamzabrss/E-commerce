<?php
include "connection.php";
session_start();
   $nome=$_POST['nome'];
   $descrizione=$_POST['descrizione'];
   $foto="images/".$_POST['foto'];
   $prezzo=$_POST['prezzo'];
   $quntita=$_POST['quntita'];
   $categoria=$_POST['categoria'];



    $sql= "INSERT INTO `prodotto` (`ID`, `Nome`, `descrizione`, `prezzo`, `quantita`, `Categoria`, `image`) VALUES ('', '$nome', '$descrizione', '$prezzo', '$quntita', '$categoria', '$foto')";
    
    $result= $conn->query($sql);

    
        
    header('location:index.php?');   

        
    
    

    $conn->close();
?>