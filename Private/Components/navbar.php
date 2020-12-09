<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Components\header.php'?>
<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Actions\functions.php'?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <nav id="navbar" style="background: #42AD6D;">
            <div class="nav-wrapper">
            <a href="#!" class="brand-logo ml-2">All In Stories</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="Private/Pages/create-category.php">Crear categoría</a></li>
                <li><a href="./Private/Pages/create-entrie.php">Crear entrada</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Categorías<i class="material-icons right">arrow_drop_down</i></a></li>
                <?php if(!isset($_SESSION['usuario'])): ?>
                <li><a href="Private/Pages/check-in.php" class="btn btn-success">registrarse</a></li>
                
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                  Iniciar sesión
                </button>
                <?php endif; ?>
<?php if(isset($_SESSION['usuario'])) : ?>
                  <li style="margin-right: 20px;"><?= "Hola, ". $_SESSION['usuario']['nombre']?></li>
                  <li><a href="Private/Components/logout.php">Cerrar sesion</a></li>
                <?php endif; ?>
            </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
                <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
        <?php $categorias = getCategories($db); 
                
                if(!empty($categorias)) :
                
                ?>
                
                <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                    </li>
                <?php endwhile; endif; ?>
        </ul>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
        <script>
            // Abrir SIDENAV del navbar
                $(document).ready(function() {
                    $('.sidenav').sidenav();
                });

                $(".dropdown-trigger").dropdown();


        </script>

        <style>
            .modal {
    display: none;
    position: fixed;
    left: 0;
    right: 0;
    background-color: transparent!important;
    padding: 0;
    max-height: 70%;
    width: 55%;
    margin: auto;
    overflow-y: auto;
    border-radius: 2px;
    will-change: top, opacity;
}

.modal-open .modal {
    overflow-x: hidden!important;
    overflow-y: hidden!important;
}
        </style>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./Private/Components/login.php" method="POST">
          <div class="input-field col col-md-12 col-sm-12">
            <i class="material-icons prefix">email</i>
            <input type="text" class="validate" name="log_email" id="log_email" autocomplete="off" placeholder="Digita tu correo">
            
          </div>
          <div class="input-field col-md-12 col-sm-12">
            <i class="material-icons prefix">enhanced_encryption</i>
            <input type="password" class="validate" name="log_pass" id="log_pass" placeholder="Digita la contraseña" autocomplete="off">
            
          </div>
          <div class="modal-footer">
        <button type="submit" class="btn btn-block" style="background:#53AD6D; color:white;">Iniciar sesión</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
        