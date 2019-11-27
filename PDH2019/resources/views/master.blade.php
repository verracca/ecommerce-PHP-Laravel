<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./css/styles.css">
  <title>Service Nuñez</title>
  <link rel="SHORTCUT ICON" href="images/logomini.jpg" type="image/x-icon">
  <style>
     /*Global*/

* {
    box-sizing: border-box;
}

ul,
ol {
    padding: 0;
    margin: 0;
}

li {
    list-style-type: none;
}

a {
    text-decoration: none;
}
/*nav*/
.avatar{
  width: 30px;
  height: 30px;
  border-radius: 50%;
  
}
.imagenesnav img{
    width: 30px;
    height: 30px;
}

.logo {
    width: 40px;
    height: 40px;
}
.buscador{
margin-right: 20px;
}
.modal-content{
font-family: 'Manjari', sans-serif;
font-weight: bold;
background-color: white;
}

/*Categorias*/
.categorias{
  margin-left: 50px;
  margin-right: 50px;
}
.linkscategorias a{
  width: 45%;
  margin-bottom: 2%;
}
.categoriasimg{
  border-radius: 50%;
  width: 100%;
}



/* FOOTER */
footer{
  margin-top: 50px;
  background-color: #ccc;
  padding-top: 20px
}

.redesociales {
margin-right: 20px;
}

.iconos {
display: inline-flex;
}

.fa-instagram {
margin: 4px;
font-size: 30px;
  color: #DC3545;

}

.fa-facebook-square {
  margin: 4px;
  font-size: 30px;
  color: #DC3545;
}

.fa-twitter-square {
  margin: 4px;
  font-size: 30px;
    color: #DC3545;
}

.form-inline {
margin-left: 8px;
}

.marcaregistrada {
color: grey;
font-size: 11px;
}
.footer{
  padding-top: 7px
}
.listafooter{
  text-decoration: none;
  color: inherit;
}
.footer ul
{
    margin: 0;
    padding: 0;
}

.footer ul li
{
    list-style-type: none;
    display: inline;
}

.footer li:not(:first-child):before {
    content: " | ";
    margin-left: 5px;
}





/*TERMINA FOOTER */

@media (min-width: 768px){
  .linkscategorias a{
    width: 28%;
  }

}
        </style>
</head>

<body>

<header>
  <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #dc3545">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand font-weight-normal text-white" href="#">
      <img class="logo" src="images/logo.png" alt="logo">Service Nuñez</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>

        <!-- if ($auth->usuarioLogueado())  -->
          <li class="nav-item d-sm-block d-lg-none">
            <a class="dropdown-item nav-link" href="logout.php">Cerrar sesión</a>
          </li>
          <li class="nav-item d-sm-block d-lg-none">
            <!-- <img class="avatar" src=" $usuario->getAvatar() ?>" alt=" $usuario->getNombre() ?>"> -->
            <span>Hola: 
                 <!-- $usuario->getNombre()  -->
            </span>
          </li>
         <!-- else :  -->
          <li class="nav-item d-sm-block d-lg-none">
            <a class="dropdown-item nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="#">Iniciar sesión</a>
          </li>
          <li class="nav-item d-sm-block d-lg-none">
            <a class="dropdown-item nav-link" data-toggle="modal" data-target="#exampleModalCenter2" href="#">Registrarme</a>
          </li>
         <!-- endif  -->
        <!-- Termina condicional -->
        <li class="nav-item d-sm-block d-md-none d-lg-none">
          <a class="dropdown-item nav-link" href="#">Carrito</a>
        </li>
      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0 font-weight-bold d-none d-lg-block buscador">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar productos" aria-label="Search">
      <button class="btn btn-sm btn-light my-2 my-sm-0 " type="submit">Buscar</button>
    </form>
    <div class="img d-none d-md-block">
      <a href="" class="text-decoration-none imagenesnav"><img src="images/carrito.png" alt="Carrito"></a>
      <div class="btn-group text-decoration-none imagenesnav">
        <button id="btnGroupDrop1" type="button" class="btn btn-link text-decoration-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="imagenesnav d-lg-block d-md-none" src="images/user.png" alt="Usuario"></button>
        <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="btnGroupDrop1">
          <!-- if ($auth->usuarioLogueado()) -->
            <li class="dropdown-item">
              <!-- <img class="avatar" src=" $usuario->getAvatar() " alt=" $usuario->getNombre() "> -->
              <span>Hola 
                   <!-- $usuario->getNombre() -->
                 </span>
            </li>
            <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
          <!--  else :  -->
            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter" href="#">Iniciar sesión</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter2" href="#"> Registrarme </a>
           <!-- endif; -->
          <!-- termina condicional -->
        </div>
      </div>
    </div>
    <span class="img">
      <a href="" class="text-decoration-none d-block d-lg-none"><img src="images/busqueda.png" alt="Busqueda"></a>
    </span>
  </nav>
</header>

<!--Modal-->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <form class="container shadow-lg p-3 mb-5 bg-white rounded" name="login" action="index.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="nombre@ejemplo.com" name="email">
            <small id="emailHelp" class="form-text text-danger">
               <!-- if (isset($erroresLogin['email']))  -->
                 <!-- $erroresLogin['email']  -->
               <!-- endif  -->
            </small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="InputPassword1" placeholder="Contraseña" name="password">
            <small id="emailHelp" class="form-text text-danger">
               <!-- if (isset($erroresLogin['password']))  -->
                 <!-- $erroresLogin['password'] ?> -->
               <!-- endif -->
            </small>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="Check1" name="recordarme">
            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Iniciar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <form class="container shadow-lg p-3 mb-5 bg-white rounded" action="index.php" method="post" enctype="multipart/form-data" name="registro">
          <div class="form-row ">
            <div class="form-group  col-sm-6 col-md-12 col-lg-6 ">
              <label for="inputName">Nombre</label>
               <!-- if (!isset($erroresRegistro["nombre"])) : ?> -->
                <!-- <input type="text" class="form-control" id="inputName" placeholder="Nombre" name="nombre" value=" $nombreOk ?>"> -->
               <!-- else : ?> -->
                <!-- <input type="text" class="form-control" id="inputName" placeholder="Nombre" name="nombre" value=""> -->
              <!-- endif ?> -->
              <small id="emailHelp" class="form-text text-danger">
                 <!-- if (isset($erroresRegistro['nombre'])) : ?> -->
                 <!-- $erroresRegistro['nombre'] ?> -->
             <!-- endif ?> -->
              </small>
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="input2Name">Apellido</label>
               <!-- if (!isset($erroresRegistro["nombre"])) : ?> -->
                <!-- <input type="text" class="form-control" id="input2Name" placeholder="Apellido" name="apellido" value=" $apellidoOk "> -->
               <!-- else : ?> -->
                <input type="text" class="form-control" id="input2Name" placeholder="Apellido" name="apellido">
               <!-- endif ?> -->
              <small id="emailHelp" class="form-text text-danger">
                 <!-- if (isset($erroresRegistro['apellido'])) : ?> -->
                 <!-- $erroresRegistro['apellido'] ?> -->
                 <!-- endif ?> -->
              </small>
            </div>
            <div class="form-group col-sm-6 col-md-12 col-lg-12">
              <label for="inputEmail4">Email</label>
               <!-- if (!isset($erroresRegistro["email"])) : ?> -->
                <input type="email" class="form-control" id="inputEmail4" placeholder="nombre@ejemplo.com" name="email">
               <!-- else : ?> -->
                <input type="email" class="form-control" id="inputEmail4" placeholder="nombre@ejemplo.com" name="email">
               <!-- endif ?> -->
              <small id="emailHelp" class="form-text text-danger">
                 <!-- if (isset($erroresRegistro['email'])) : ?> -->
                 <!-- $erroresRegistro['email'] ?> -->
                 <!-- endif ?> -->
              </small>
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" name="password">
              <small id="emailHelp" class="form-text text-danger">
                 <!-- if (isset($erroresRegistro['password'])) : ?> -->
                   <!-- $erroresRegistro['password'] ?> -->
                 <!-- endif ?> -->
              </small>
            </div>
            <div class="form-group  col-sm-6 col-md-12 col-lg-6">
              <label for="inputPassword42">Confirmar contraseña </label>
              <input type="password" class="form-control" id="inputPassword42" placeholder="Confirmar contraseña" name="retypePassword">
              <small id="emailHelp" class="form-text text-danger">
                 <!-- if (isset($erroresRegistro['retypePassword'])) : -->
                   <!-- $erroresRegistro['retypePassword']  -->
                 <!-- endif  -->
              </small>
            </div>
            <div class="form-group">
              <label for="avatar">Imagen de perfil</label>
              <input name="avatar" type="file" id="avatar" class="form-control-file">
              <small id="emailHelp" class="form-text text-danger">
                 <!-- if (isset($erroresRegistro['avatar'])) : -->
                   <!-- $erroresRegistro['avatar']  -->
                <!-- php endif  -->
              </small>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-primary">Registrarme</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- FinNavegador -->

@yield('content');

<!-- InicioFooter -->



<footer>
    <div class="d-flex justify-content-between flex-wrap">
      <form class="form-inline">

        <div class="form-group mx-sm-3 mb-2 d-none d-md-block" >
          <label for="inputPassword2" class="sr-only">Ingrese e-mail</label>
          <input type="text" class="form-control" id="inputPassword2" placeholder="Ingrese su e-mail">
        </div>
        <button type="submit" class="btn btn-danger mb-2 d-none d-md-block">Recibir ofertas!</button>
      </form>
      <div class="footer">
        <ul>
          <li>
            <a class="listafooter" href="#">Inicio</a>
          </li>
          <li class="">
            <a class="listafooter" href="#">Categorias</a>
          </li>
          <li class="">
            <a class="listafooter" href="#">Contacto</a>
          </li>
        </ul>

      </div>
      <div class="redesociales">
        <ul class="iconos">
          <li><a href=""> <i class="fab fa-instagram"></i></a></li>
          <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
          <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="marca d-flex justify-content-center align-items-center mt-2">
      <br>
      <p class="marcaregistrada"> Copyright 2019 - Service Nuñez® </p>
    </div>

  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>