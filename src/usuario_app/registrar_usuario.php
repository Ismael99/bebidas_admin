<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Iconos-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    <!--Estilos-->
    <link rel="stylesheet" href='../../css/style.css' />
    <title>Registrar Usuario</title>

</head>
<body class="body-form">
<div class="row align-items-center row-form">
        <div class="col-8 mx-auto">
           <form action="" method="POST" class="form-crud">
                
                <div class="row">
                    <div class="col-12">
                        <legend class="text-center" >Registrar Usuario</legend>
                    </div>
                    <div class="col-12 text-center my-3">
                        <div class="form-group">
                            <strong>Username: </strong> <br> <input type="text" name="usuario_username" id="id_usuario_username" required>                  
                        </div>
                            
                        <div class="form-group">
                           <strong>Password: </strong> <br> 
                                <input type="password" name='usuario_password' id="id_usuario_password"><br>
                                <input type="checkbox" onclick="myFunction()">Show Password
                        </div>

                        <div class="form-group">
                            <strong>Nombre:</strong><br><input type="text" name="usuario_nombre" id="id_usuario_nombre" required>              
                        </div>
                       
                        <div class="form-group">
                            <strong>Dirección:</strong> <br> <textarea name="direccion" id="id_direccion" cols="25" rows="7" required></textarea>
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong><br><input type="text" name="usuario_email" id="id_usuario_email" required>              
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong> <br> <input type="tel" name="telefono" id="id_telefono" 
                            pattern="[0-9]{8}" required>
                        </div>
                        <div class="form-group">
                            <strong>Fecha nacimiento:</strong><br><input type="date" name="fecha_nacimiento" id="id_fecha_nacimiento" required>              
                        </div>
                    </div>
                    <div class="col-11 linea mx-auto my-3"> </div>
                    <div class="col-6 text-center my-2">
                        <button onclick="back()" type="button" class="btn btn-danger btn-cancelar-form">
                            <h6 class="my-auto">Volver <i class="fas fa-undo-alt"></i></h6>
                        </button>
                    </div>
                    <div class="col-6 text-center my-2">
                        <button class="btn btn-primary btn-enviar px-3" type="submit"> 
                            <h6 class="my-auto" >Guardar <i class="far fa-save"></i></h6> 
                        </button>
                    </div>
                </div>
                                   
           </form>
        </div>
    </div>
    
    <?php 
    
        require('../../plantillas/connection.php');
        require('../../plantillas/clean_string.php');
        
        $username = $_REQUEST['usuario_username'];
        $password = $_REQUEST['usuario_password'];
        $nombre = $_REQUEST["usuario_nombre"];  
        $email = $_REQUEST["usuario_email"];  
        $direccion = $_REQUEST["direccion"];
        $telefono = $_REQUEST["telefono"];
        $nacimiento = $_REQUEST["fecha_nacimiento"];

        $username = clean_string($username);
        $password = clean_string($password);
        $nombre = clean_string($nombre);
        $email = clean_string($email);
        $direccion = clean_string($direccion);
        $telefono = clean_string($telefono);    


        $query = 'INSERT INTO usuario(usuario_username, usuario_password ,usuario_nombre, usuario_direccion, usuario_email,
                                        usuario_telefono, usuario_fecha_nacimiento) 
                    VALUES (" '. $username .' ","'. $password .'","'. $nombre .'","'. $direccion .'","'. $email .'",
                            "'. $telefono .'", "'. $nacimiento .'")';

        if ($mysqli->query($query)) {
            header('Location: http://localhost/bebidas/src/usuario_app/ver_usuario.php');
        }
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
        
<script>
    function myFunction() {
        var x = document.getElementById("id_usuario_password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</html>

