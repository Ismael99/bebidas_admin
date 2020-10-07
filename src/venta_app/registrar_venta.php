<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Iconos-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Estilos-->
    <link rel="stylesheet" href='../../css/style.css' />

    <title>Registrar Venta</title>
    
</head>
<body class="body-form">
    <div class="row align-items-center row-form">
        <div class="col-8 mx-auto">
           <form action="" method="POST" class="form-crud">
                
                <div class="row">
                    <div class="col-12">
                        <legend class="text-center" >Registrar Venta</legend>
                    </div>
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <strong>Fecha:</strong> <br> <input type="date" name="venta_fecha" id="id_venta_fecha" required> 
                        </div>
                       
                        <div class="form-group">
                            <strong>Cantidad:</strong> <br> <input type="number" name="cantidad" id="id_cantidad" required>
                        </div>
                        <div class= 'form-group'>
                            <strong>Total($):</strong> <br> <input type="number" step="any" name="total" id="id_total" required>
                        </div>
                    </div>
                    <div class="col-11 linea mx-auto my-3"> </div>
                    <div class="col-6 text-center my-2">
                        <button type="button" class="btn btn-danger btn-cancelar-form">
                            <h6 class="my-auto">Volver <i class="fas fa-undo-alt"></i></h6>
                        </button>
                    </div>
                    <div class="col-6 text-center my-2">
                        <button onclick='back()' class="btn btn-primary btn-enviar px-3" type="submit"> 
                            <h6 class="my-auto" >Guardar <i class="far fa-save"></i></h6> 
                        </button>
                    </div>
                   
                </div>
            </form>
        </div>
    </div>

    
    <?php 

        require('../../plantillas/connection.php')

    ?>


</body>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
    function back(){
        history.back(1)
    }
</script>


</html>
