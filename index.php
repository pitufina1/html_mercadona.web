<!doctype html>

<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <title>Hello, world!</title>

</head>

<body> 
    <header>
        <img src="imagenes/mercadona_logo.jpg" alt="Mercadona">
        <button type="button" class="btn btn-round btn-danger float-right"><i class="fas fa-shopping-cart"></i> Compra online</button>
    </header>
    
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Conócenos <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Supermercados</a>
                <a class="nav-item nav-link" href="#">Servicios</a>
                <a class="nav-item nav-link" href="#">Consejos</a>
                <a class="nav-item nav-link" href="#">Actualidad</a>
                <a class="nav-item nav-link" href="#">Atención al Cliente</a>
            </div>
        </div>
    </nav>
    
    <div>
        <img src="imagenes/tienda.jpg" alt="Tienda Mercadona" witdh=100%>
    </div>
    
    <div class="titulo">
        <h1> Actualidad Mercadona </h1>
    </div>

    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="imagenes/card1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mercadona amplía su red social en Galicia 
                        y comienza a colaborar con el comedor social de la 
                        Real Institución Benéfico Social Padre Rubinos</h5>
                    <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>
                    <button type="button" class="btn btn-round btn-primary btn-sm">Responsabilidad Social</button><br><br>
                    <button type="button" class="btn btn-round btn-primary btn-sm">Donaciones de alimentos</button><br><br>
                </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="imagenes/card2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mercadona compra 290.000 kilos de patata de Álava, un 23% más que la campaña anterior </h5>
                    <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>
                    <button type="button" class="btn btn-round btn-primary btn-sm">Productos de proximidad</button><br><br>
                </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="imagenes/card3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mercadona compra 1 millón de kilos de alcachofa en Tudela </h5>
                    <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>
                    <button type="button" class="btn btn-round btn-primary btn-sm">Productos de proximidad</button><br><br>
                </div>
        </div>
    </div>

    <div id="formulario">
        <p class="text-center"><a href=""> Ver todos </a></p>
        <h2> Mercadona cuenta con 1.626 supermercados.<br> Encuentra tu Mercadona más cercano y su horario </h2><br>
        
        <div class="row justify-content-center">
            <div class="col-4 input-group mb-3">
                <input type="text" class="form-control" placeholder="Ciudad, código postal o dirección" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i> Buscar </button>
                    </div>
            </div>
        </div>
        <p class="text-center"><button type="button" class="btn btn-link"><i class="fas fa-location-arrow"></i> Usar mi localización actual </button></p><br>
    </div>

    <div class="titulo">
        <h1> Consejos </h1>
    </div>

    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="imagenes/card4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Alimentación </h5>
                    <p> Descubre todas nuestras novedades y consejos para darle sabor y alegría a tus platos, siempre con productos que garantizan la máxima calidad y frescura. ¡Dale un capricho a tu paladar!
                </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="imagenes/card5.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Perfumeria </h5>
                    <p> Todo lo que necesitas para tu cuidado y el de los tuyos: novedades, consejos y trucos sobre nuestros productos de perfumería, puericultura, cosmética y belleza. ¡Siéntete bien! </p>
                </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="imagenes/card7.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Hogar </h5>
                    <p><strong> Aquí encontrarás todo lo necesario para el cuidado de tu casa: productos para la limpieza y mantenimiento del hogar y de la ropa, que cuentan con la máxima garantía de calidad y eficacia. ¡Hogar, dulce hogar! </strong></p>
                </div>
        </div>
    </div>

    <div id="formulario">
        <p class="text-center"><a href=""> Ver todos </a></p>
    </div>
    
    <div class="row" id="anuncios">
        <div class="col">
            <h1 class="fas fa-bullhorn"></h1>
            <p></p>
            <h1> Atención al Cliente </h1>
            <p></p>
            <p> Puedes realizar cualquier comentario o consulta llamándonos a nuestro
                 <strong> teléfono gratuito de Atención al Cliente</strong>, 
                 enviando un <strong>Correo Electrónico</strong> 
                 o si lo prefieres contacta con nosotros a través de nuestras <strong>Redes Sociales</strong>. </p>
         </div>
            
        <div class="col">
            <h1 class="fas fa-clipboard-list"></h1>
            <p></p>
            <h1> Sala de Prensa </h1>
            <p></p>
            <p> Notas de prensa, estudios, informes, 
                memorias anuales y otros materiales corporativos. </p>
        </div>
    </div>

    <div id="ofertas-empleo" class="text-center">
        <h1> Ofertas de empleo </h1>
        <p></p>
        <p> Mercadona dispone de un Modelo de Recursos Humanos <br>
        reconocido por ofrecer puestos de trabajo estables y de calidad.</p>
        <p></p>
        <p></p>
        <button type="button" class="btn btn-round btn-primary btn-lg"> Ofertas de empleo </button><br><br>

    </div>
         
    <div id="logo-footer" class="text-center">
        <img src="imagenes/mercadona_logo_footer.jpg" alt="Mercadona" width="560px">
    </div>

    <footer>
        <div class="row" >
            <div class="col">    
                <p> <strong> Lo más buscado </strong></p>
                    <ul>
                    <li> Localizar Supermercados </li>
                        <li> Trabaja con nosotros </li>
                        <li> Sala de Prensa </li>
                        <li> Conoce Mercadona </li>
                        <li> Consejos </li>
                    </ul>
            </div>

            <div class="col">  
                <p> <strong> Enlaces de interés </strong></p>
                    <ul>
                        <li> Compra online </li>
                        <li> Tarjeta Mercadona </li>
                        <li> Factura Clientes </li>
                        <li> Portal Trabajador </li>
                        <li> E-factura proveedores </li>
                        <li> Portal Trinidad </li>
                    </ul>  
            </div>

            <div class="col">    
                <p><strong> Consejos </strong></li></p>
                    <ul>
                        <li> Consejos de Alimentación </li>
                        <li> Consejos de Perfumería </li>
                        <li> Consejos de Hogar </li>
                        <li> Consejos de Mascotas </li>
                    </ul>  
            </div>

            <div class="col">   
                <p><strong> Atención al cliente </strong></p>
                    <ul>
                        <li> <a href=""><i class="fas fa-envelope"></i> Contacto </a></li>
                        <li><i class="fas fa-phone"></i> 900 500 103 </li>
                    </ul>   
                <p><strong> Redes sociales </strong></p>
                    <p>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-instagram"></i>
                    </p>  
            </div>
    
            <div class="col">    
                <img class="text-center" src="imagenes/quiero_corredor.jpg" alt="">
            </div>
        </div>   

        <div class="row">
            <div class="col-md-4">
                <p>© Mercadona S.A. A46103834. Todos los derechos reservados. </p>
            </div>
            <div class="col-md-8">
                <ul>
                    <li> Accesibilidad   </li>
                    <li> Condiciones Wifi   </li>
                    <li> Política de Privacidad   </li>
                    <li> Política de cookies   </li>
                    <li> Términos y condiciones   </li>
                    <li> Requisitos técnicos   </li>
                </ul>
            </div>
        </div>
    
    </footer>
   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>

</html>