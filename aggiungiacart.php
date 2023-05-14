<?php
include "connection.php";
session_start();
if(isset($_SESSION["ID"])){

   $IDoggett=$_GET["IDogg"];
   $numogg=$_POST["num-product"];
   $immagine=$_GET["imma"];
   $prezzo=$_GET["prezzo"];
   $nome=$_GET["nome"];
   $IDUtente=$_GET["IDUtente"];
    $sql= "INSERT INTO `carrello` (`id`, `data_creazione`, `quantita`, `immagine`, `IDoggetto`, `prezzo`, `nomeOgg`, `IDUtente`, `nascosto`) VALUES ('', '2023-05-08', '$numogg', '$immagine', '$IDoggett', '$prezzo', '$nome', '$IDUtente', 0)";
    $result= $conn->query($sql);

    

    header('location:index.php?');
    }else{
        header('location:index.php?error=devi prima accedere');
    }
   

    $conn->close();
?>