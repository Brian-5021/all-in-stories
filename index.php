<!DOCTYPE html>
  <html lang="es">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <nav id="navbar">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo ml-2">All In Stories</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>


      <div class="parallax-container center valign-wrapper m-3" id="parallax">
          <div class="container">
            <div class="row">
              <div class="col s12 white-text">
                <h2 class="teal-text teal-text TitulosHome">Bienvenidos a All In Stories</h2>
                <h4 class="parrafoPara">Un sitio diseñado para que puedas compartir tus historias ya sean fantasticas o de tu vida real, ¡millones quieren leerte!
                </h4>
                <a href="index.html" class="waves-effect waves-light btn-large teal lighten-2">Iniciar sesión</a>
                <a href="" class="waves-effect waves-light btn-large teal lighten-2">Registrarse</a>
              </div>
            </div>
          </div>
          <div class="parallax">
          <img src="assets/images/background1.jpg" style="opacity: 1; background-size: cover;">
          </div>
      </div>


      <div class="container" id="text-ult-entries" class="mt-3 mb-2">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="alert color-text-1 text-center" role="alert">
              <h3>Últimas <b>Historias</b> de nuestros usuarios</h3>
            </div>
          </div>
        </div>
      </div>


      <div class="container" id="entries">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="https://www.eluniversal.com.mx/sites/default/files/2020/04/07/tours_terror_cuarentena.jpg">
                <span class="card-title">Card Title</span>
          
                <a class="btn-floating halfway-fab waves-effect waves-light red" href="www.google.com"><i class="material-icons">remove_red_eye</i></a>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>  
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="https://www.eluniversal.com.mx/sites/default/files/2020/04/07/tours_terror_cuarentena.jpg">
                <span class="card-title">Card Title</span>
          
                <a class="btn-floating halfway-fab waves-effect waves-light red" href="www.google.com"><i class="material-icons">remove_red_eye</i></a>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>  
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="https://www.eluniversal.com.mx/sites/default/files/2020/04/07/tours_terror_cuarentena.jpg">
                <span class="card-title">Card Title</span>
          
                <a class="btn-floating halfway-fab waves-effect waves-light red" href="www.google.com"><i class="material-icons">remove_red_eye</i></a>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
            </div>  
          </div>
        </div>
      </div>



      <div class="container" id="text-ult-entries" class="mt-3 mb-2">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="alert color-text-2 text-center" role="alert">
              <h3>Ranking de usuarios con más <b>Historias</b> para contar</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container" id="ranking-users">
        <ul class="collection">
          <li class="collection-item avatar">
            <img src="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14044.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <img src="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14044.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <img src="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14044.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <img src="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14044.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <img src="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14044.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
        </ul>
      </div>



      <footer class="page-footer footer" id="footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

      
          
          
    
    </body>
  </html>