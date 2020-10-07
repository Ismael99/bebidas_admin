<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active btn-navbar" id='home-btn'>
                <a class="nav-link btn" href="/bebidas/src/home/index.php"><h6><i class="fas fa-home"></i><br>Home</h6></a>
            </li>
            <li class="nav-item active btn-navbar" id='bebidas-btn'>
                <a class="nav-link btn dropdown-toggle" id="navbar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-beer"></i><br>Bebidas
                </a>
                <div class="dropdown">
                    <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        <a href='/bebidas/src/bebida_app/registrar_bebida.php' class="dropdown-item btn" type="button">Registrar Bebida</a>
                        <a href='/bebidas/src/bebida_app/ver_bebidas.php' class="dropdown-item btn" type="button">Ver Bebidas</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active btn-navbar" id='cliente-btn'>
                <a class="nav-link btn dropdown-toggle" id="navbar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-friends"></i><br>Clientes
                </a>
                <div class="dropdown">
                    <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        <a href='/bebidas/src/cliente_app/registrar_cliente.php' class="dropdown-item" type="button">Registrar Clientes</a>
                        <a href='/bebidas/src/cliente_app/ver_clientes.php' class="dropdown-item" type="button">Ver Clientes</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active btn-navbar" id='proveedor-btn'>
                <a class="nav-link btn dropdown-toggle" id="navbar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-truck"></i><br>Proveedores
                </a>
                <div class="dropdown">
                    <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        <a href='/bebidas/src/proveedor_app/registrar_proveedor.php' class="dropdown-item" type="button">Registrar Proveedor</a>
                        <a href='/bebidas/src/proveedor_app/ver_proveedores.php' class="dropdown-item" type="button">Ver Proveedores</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active btn-navbar" id='ventas-btn'>
                <a class="nav-link btn dropdown-toggle" id="navbar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i><br>Ventas
                </a>
                <div class="dropdown">
                    <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        <a href='/bebidas/src/venta_app/registrar_venta.php' class="dropdown-item" type="button">Registrar Venta</a>
                        <a href='/bebidas/src/venta_app/ver_ventas.php' class="dropdown-item" type="button">Ver Ventas</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active btn-navbar" id='compras-btn'>
                <a class="nav-link btn dropdown-toggle" type='button' id="navbar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-dollar-sign"></i><br>Compras
                </a>
                 <div class="dropdown">
                    <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                        <a href='/bebidas/src/compra_app/registrar_compra.php' class="dropdown-item" type="button">Registrar Compra</a>
                        <a href='/bebidas/src/compra_app/ver_compras.php' class="dropdown-item" type="button">Ver Compras</a>
                    </div>
                </div>
            </li>
        </ul>
    </div >

    
    <form class="my-2 form-inline my-md-0 ml-auto">
        <div class='input-group'> 
            <input class='form-control' type='text' placeholder='Buscar...'
            name='buscar'>
            <button type='submit' class='btn btn-buscar ml-3'>
                <i class='fas fa-search'></i> 
            </button>
        </div>
    </form>

</nav>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script>
    let home = $('#home-btn');
    let cliente = $('#cliente-btn');
    let bebida = $('#bebida-btn');
    let proveedor = $('#proveedor-btn');
    let compra = $('#compra-btn');
    let venta = $('#venta-btn');

    $(window).on("load",function(){    
        let URLactual = location.href;
        if(URLactual.indexOf('proveedor_app') !== -1){
            proveedor.removeClass('btn-navbar').addClass('btn-navbar-active');
        }    
        if(URLactual.indexOf('bebida_app') !== -1){
            bebida.removeClass('btn-navbar').addClass('btn-navbar-active');
        }    
        if(URLactual.indexOf('venta_app') !== -1){
            venta.removeClass('btn-navbar').addClass('btn-navbar-active');
        }    
        if(URLactual.indexOf('compra_app') !== -1){
            compra.removeClass('btn-navbar').addClass('btn-navbar-active');
        }    
        if(URLactual.indexOf('cliente_app') !== -1){
            cliente.removeClass('btn-navbar').addClass('btn-navbar-active');
        }    
        if(URLactual.indexOf('home') !== -1){
            home.removeClass('btn-navbar').addClass('btn-navbar-active');
        }    
    
    });

</script>
