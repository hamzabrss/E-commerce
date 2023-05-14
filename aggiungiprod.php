<?php
include "connection.php";
session_start();
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <form action="chkadd.php" method="POST">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>ADD</h2>
                    </div>
                    <p>Please fill this form to add a profile</p>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>descrizione</label>
                            <input type="text" name="descrizione" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Foto Prodotto</label>
                            <input type="file" name="foto" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>prezzo</label>
                            <input type="numeber" name="prezzo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Quantità</label>
                            <input type="number" name="quntita" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Categoria</label>
                            <select name="categoria" id="cars">
                                <option value="uomo">Uomo</option>
                                <option value="donna">Donna</option>
                                <option value="accessori">Accessorio</option>
                                
                            </select>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Aggiungi">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
