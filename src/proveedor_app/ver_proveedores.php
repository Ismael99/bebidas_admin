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
    <title>Proveedor</title>
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

$query = "SELECT proveedor_nombre, proveedor_telefono, proveedor_direccion, proveedor_email, proveedor_fecha_creacion, proveedor_fecha_edicion
FROM proveedor p";

$resultado_query = $mysqli->query($query)
    or die ($mysqli->error. " en la linea " . (__LINE__-1));


echo "
 <div class='container-fluid container-view'>

        <div class='row'>
                
            <div class='col-10 mx-auto mt-3 text-center text-white'>
                <h3> Proveedores Registrados. </h3>
            </div>
            <div class='col-10 mt-4  mx-auto'>
                <table class='table table-striped table-dark table-view '>
                    <thead>
                            <tr>
                                <th scope='col' > Proveedor  </th>
                                <th scope='col' > Teléfono  </th>
                                <th scope='col' > Dirección  </th>
                                <th scope='col' > Email </th>
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
</html>

