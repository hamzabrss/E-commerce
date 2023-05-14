<?php
include "connection.php";
session_start();
   $us=$_POST['Username'];
   $pas=$_POST['Passwor'];
    $sql= "INSERT INTO `utente` (`username`, `passwor`, `admin`) VALUES ( '$us', '$pas', '0')";
    
    $result= $conn->query($sql);

    
        $_SESSION["username"]=$_POST['username'];
        

        header('location:login.php?');
    
    

    $conn->close();
?>