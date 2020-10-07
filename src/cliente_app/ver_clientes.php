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
    <title>Clientes</title>
</head>
<body>
<?php

require('../../plantillas/navbar.php');

?>


<?php

session_start();
$_POST = $_SESSION["post"];
$_SESSION["post"] = "";

require('../../plantillas/connection.php');

$query = "SELECT cliente_nombre, cliente_direccion, cliente_telefono, cliente_fecha_creacion, cliente_fecha_edicion
FROM cliente c;";

$resultado_query = $mysqli->query($query)
    or die ($mysqli->error. " en la linea " . (__LINE__-1));


echo "
 <div class='container-fluid container-view'>

        <div class='row'>
                
            <div class='col col-12 col-barra-busqueda'>
                <form method='GET'>
                    <div class='input-group '>

                        <a href='/bebidas/src/cliente_app/registrar_cliente.php' class='btn mr-auto my-auto btn-agregar-registro ' title='Agregar registro de cliente' >
                            Nuevo <i class='fas fa-plus'></i>
                        </a>

                        <input class='form-control mx-1' type='text' placeholder='Buscar...'
                            name='buscar'>
                        <span class='ml-1 input-group-list'>
                            <button type='submit' class='btn btn-buscar'>
                            <i class='fas fa-search'></i>
                            Buscar </button>
                        </span>
                    </div>
                </form>
            </div>


            <div class='col-10 mx-auto mt-3 text-center text-white'>
                <h3> Clientes Registrados. </h3>
            </div>
            <div class='col-10 mt-4 col-table mx-auto'>
                <table class='table table-striped table-dark table-view '>

                    <thead>
                            <tr>
                                <th scope='col' > Nombre  </th>
                                <th scope='col' > Dirección  </th>
                                <th scope='col' > Teléfono  </th>
                                <th scope='col' > Fecha de Creación </th>
                                <th scope='col' > Fecha de Edición </th>                                
                                <th scope='col' > Eliminar </th>
                                <th scope='col' > Modificar </th>
                            </tr>";
                            
                            while ($registro = $resultado_query->fetch_assoc()){
                               
                               echo "<tbody>";
                                     echo "<tr>";
                                        foreach ($registro as $campo){
                                            echo "<td>", $campo, "</td>";
                                            
                                        }
                                        echo "<td> 
                                            <button type='button' class='btn btn-danger' title='Eliminar registro' >        
                                                <i class='fas fa-trash-alt'></i>
                                             </button>   
                                        </td>";                                       
                                        echo "<td> 
                                            <button type='button' class='btn btn-primary' title='Editar registro'>
                                                <i class='fas fa-edit'></i>            
                                            </button>   
                                        </td>";                                       
                                                                     
                                        echo "</tr>";
                               echo "</tbody>";
                            }                            

                   echo"</thead>                

                </table>
            
            </div>            

        </div>
    
 </div>";

?>

</body>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
