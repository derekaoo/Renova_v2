<link rel="stylesheet" href="assets/css/estilos.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">

<!-- barra de menu -->
    <nav class="navbar shadow menu d-block text-white">
        <div class="container d-flex p-0 m-auto">
            <div class="d-flex">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo2.png" alt="logo" class="logo ">
                </a>
                <a href="" class="text-decoration-none text-white">
                    <h6 class="m-0" ><i class="fa-solid fa-map-pin text-white"></i>
                    Oficina: Paseo de las Parras #229 <br>
                    Valle Verde #34284 Durango, Dgo.</h6>
                </a>
            </div>
            <!-- boton de menu para movil-->
            <button class="navbar-toggler m-1 border-0 d-sm-none text-white" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-lg fa-solid fa-bars"></i>
            </button>

            <!-- barrra de buscador -->
                <div class="btn-search m-auto">
                    <div class="input-group" id="contenedor-search">
                            <input type="text" class="form-control" id="inputsearch" placeholder="¿Qué estás buscando?">
                            <button class="input-group-text" style="cursor:pointer;" id="btnsearch">
                                <i class="fa fa-fw fa-search" id="search-icon"></i>
                            </button>
                    </div>
                </div>

                <script>    
                    const busquedas = [
                        
                    ]
                    const inputsearch = document.querySelector("#inputsearch");
                    const btnsearch = document.querySelector("#btnsearch");

                    const filtrar = () =>{
                        console.log(inputsearch.value);
                       
                    }

                    btnsearch.addEventListener("click", filtrar);


                </script>
                 <!-- iconos -->
                    <a class="nav-icon position-relative text-decoration-none  m-auto" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-white m-2"></i>
                        <span class="position-absolute top-0  translate-middle badge">7</span>
                    </a>
                    
                    <a class="nav-icon position-relative text-decoration-none m-auto d-none d-sm-block">
                            <button class="btn btn-success justify-content-center align-items-center d-flex" data-toggle="modal" data-target="#ventanaModal">
                            <i class="fa fa-fw fa-user text-white m-2"></i>
                            <span class="position-absolute top-0  translate-middle badge "></span>
                    Inicia Sesión <br> o registrate
                    </button> 
                    </a>
                     
        <div class="btn-group btn-group-toggle " data-toggle="buttons">
    <div class="d-none d-sm-block">
    <div class="btn-group text-light" role="group">
        <button id="btnGroupDrop1" type="button" class="btn opciones dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Servicios
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
            <a class="dropdown-item" href="#">Dropdown link</a>
        </div>
    </div>

    <div class="btn-group " role="group">
        <button id="btnGroupDrop1" type="button" class="btn opciones dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Inmobiliaria
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link2</a>
            <a class="dropdown-item" href="#">Dropdown link2</a>
        </div>
    </div>

    <div class="btn-group " role="group">
        <button id="btnGroupDrop1" type="button" class="btn opciones dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ofertas
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
            <a class="dropdown-item" href="#">Dropdown link</a>
        </div>
    </div>
    </div>
</div>
                    </div>
    </nav>
    <!-- fin de barra del menu -->


        <!-- Ventana Modal -->

        <div class="modal fade" id="ventanaModal" tabindex="2" role="dialog" aria-labelledby="tituloVentana" aria-hidden="false">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <?php 
                            include_once("login.php");
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="modal " id="ventanaModal2" tabindex="2" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <?php 
                            include_once("registrar.php");
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Termina ventana modal -->








            <!-- Menu para moviles -->
<div class="row collapse navbar-collapse flex-fill text-dark mx-auto m-1" id="templatemo_main_nav">
    <div class="mx-auto m-auto text-center d-flex">
        <a class="nav-link m-auto text-dark align-items-center" href="login.php"><i class="fa fa-fw fa-user text-dark m-auto"></i><h6>Iniciar sesion</h6> </a>
        <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-tag text-dark m-auto"></i><h6>Promociones</h6></a>
        <a class="nav-link m-auto text-dark" href="index.php"><i class="fa fa-fw fa-book-open text-dark m-auto"></i><h6>Catalogo</h6></a> 
    </div>
</div>
        <!-- fin del menu de moviles -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/modal.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

