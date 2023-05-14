<?php
include "connection.php";
session_start();
   $cancella=$_GET["canc"];
   $nome=$_POST['nome'];
   $cognome=$_POST['cognome'];
   $indirizzo=$_POST['indirizzo'];
   $id = $_SESSION["ID"];
   

    $sql1= "UPDATE carrello SET nascosto = 1 WHERE carrello.IDUtente = $id";
    $result= $conn->query($sql1);

    $sql= "INSERT INTO ordine (`ID`, `nome`, `cognome`, `indirizzo`, `IDcarrello`) VALUES ( ,'$nome', '$cognome', '$indirizzo', $cancella)";
    $result= $conn->query($sql);

        

    header('location:shoping-cart.php?');
    
    

    $conn->close();
?>