<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Components\navbar.php'?>
<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Actions\functions.php'?>


<?php session_start() ?>

<div class="container" style="height: auto!important;">
  <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 mt-1 mb-2">
            <hr style="height: 10px; background-color: #42AD6D;">
            <h2 style="color:#42AD6D;"><center>REGISTRATE</center></h2>
          </div>
        </div>
      </div>
      <?php if(isset($_SESSION['completed'])): ?>
			<div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="alert alert-success" role="alert">
          <?=$_SESSION['completed']?>
          <br><br>
          <a class="btn btn-success" role="button" onclick="redirect()">Ir al inicio</a>
          </div>
          
        <?php elseif(isset($_SESSION['errors']['general'])): ?>
          <div class="alert alert-danger" role="alert">
          <?=$_SESSION['errors']['general']?>
          </div>
        <?php endif; ?>
        </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

      <form class="col s12 mt-2" action="../Actions/registro.php" method="POST" id="form_register" autocomplete="nope">
        <div class="row">
          <div class="input-field col-md-6 col-sm-12">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate" name="reg_nombre" id="reg_nombre" autocomplete="nope">
            <label for="icon_prefix">Nombre</label>
            <?php echo isset($_SESSION['errors']) ? DisplayErrors($_SESSION['errors'], 'reg_nombre') : '' ?>
          </div>
          <div class="input-field col-md-6 col-sm-12">
            <i class="material-icons prefix">account_box</i>
            <input id="icon_apellido" type="text" class="validate" name="reg_apellido" id="reg_apellido">
            <label for="icon_apellido">Apellido</label>
            <?php echo isset($_SESSION['errors']) ? DisplayErrors($_SESSION['errors'], 'reg_apellido') : '' ?>
          </div>
          <div class="input-field col col-md-12 col-sm-12">
            <i class="material-icons prefix">email</i>
            <input id="icon_email" type="text" class="validate" name="reg_email" id="reg_email" autocomplete="new-text">
            <label for="icon_email" autocomplete="off">Correo</label>
            <?php echo isset($_SESSION['errors']) ? DisplayErrors($_SESSION['errors'], 'reg_email') : '' ?>
          </div>
          <div class="input-field col-md-6 col-sm-12">
            <i class="material-icons prefix">enhanced_encryption</i>
            <input id="icon_password" type="password" class="validate" name="reg_pass" id="reg_pass">
            <label for="icon_password">Contraseña</label>
            <?php echo isset($_SESSION['errors']) ? DisplayErrors($_SESSION['errors'], 'reg_pass') : '' ?>
          </div>
          <div class="input-field col-md-6 col-sm-12">
            <i class="material-icons prefix">enhanced_encryption</i>
            <input id="icon_password2" type="password" class="validate" name="reg_repass" id="reg_repass">
            <label for="icon_password2">Repita Contraseña</label>
          </div>
          <div class="file-field input-field col-md-12 col-sm-12 ">
            <div class="btn" style="background:#42AD6D; color:white;">
              <span>Buscar</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Subir foto de perfil" name="reg_file" id="reg_file">
            </div>
          </div>
          <div class="input-field col-md-12 col-sm-12 mt-5">
            
            <button type="submit" class="btn btn-block" style="background:#FA8078; color:white;">Guardar Información</button>
            </div>
          </div>
        </div>
      </form>
      <?php 
            
            DeleteErrors();

            
            ?>
      </div>
    </div>
  </div>
</div>

<script>
    function redirect(){
      window.location.replace('http://localhost/php/All-In-Stories/index.php');
    }
</script>

<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Components\footer.php'?> 