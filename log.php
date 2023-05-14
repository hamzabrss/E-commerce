<?php
include "connection.php";
session_start();
   
    $sql= "SELECT * FROM utente where username='".$_POST['username']."' AND passwor='".$_POST['password']."'";
    
    $result= $conn->query($sql);

    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $_SESSION["username"]=$_POST['username'];
        $_SESSION["ID"]=$row['ID'];

        header('location:index.php?Idut='.$_SESSION["ID"]);
    }
    else{
        header('location:index.php?err=Credenziali errate!&oldEmail='.$_POST['username']);
    }

    $conn->close();
?>