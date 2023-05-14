<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pagamento</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php 
    if(isset($_GET["idcart"])){
     echo '<form action="cancellacarrello.php?idcart='.$_GET["idcart"].'" method="POST">
        <div class="wrapper">
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Pagamento</h2>
                    </div>
                     
                     
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>cognome</label>
                            <input type="text" name="cognome" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Indirizzo</label>
                            <input type="text" name="indirizzo" class="form-control" >
                            
                        </div>
                        
                        
                        <input type="submit" class="btn btn-primary" value="Aggiungi">
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>';}?>
</body>

</html>