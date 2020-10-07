<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Iconos-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">   
    <!--table-->    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
     <!--Estilos-->
    <link rel="stylesheet" href='../../css/style.css' />
 
    <title>Home</title>
</head>
<?php

require('../../plantillas/navbar.php');

?>

<body class='body-home'>
    <div class="container-fluid my-auto container-home">
        <div class="row">
            <div class="col-5">
                <a href="/bebidas/src/cliente_app/ver_clientes.php" class='btn btn-home' type='button'>Clientes</a>
            </div>
            <div class="col-5"> 
                <a href="/bebidas/src/proveedor_app/ver_proveedores.php" class='btn btn-home' type='button'>Proveedores</a>
            </div>
            <div class="col-5">
                <a href="/bebidas/src/usuario_app/ver_usuarios.php" class='btn btn-home' type='button'>Usuarios</a>
            </div>
        </div>
    </div>
</body>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></Vcript>

</html>
