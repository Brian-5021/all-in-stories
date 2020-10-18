
    <!-- Header | librerías | Conexión a Base de datos -->
    <?php require_once 'Private/Components/header.php'?>
    <body>
    <!-- NAVBAR -->
    <?php require_once 'Private/Components/navbar.php'?>
    <!-- PARALLAX -->
    <?php require_once 'Private/Components/parallax.php'?>
      <div class="container" id="text-ult-entries" class="mt-3 mb-2">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="alert color-text-1 text-center" role="alert">
              <h3>Últimas <b>Historias</b> de nuestros usuarios</h3>
            </div>
          </div>
        </div>
      </div>
    <!-- ENTRADAS DEL HOME -->
    <?php require_once 'Private/Components/entries-home.php'?> 
      <div class="container" id="text-ult-entries" class="mt-3 mb-2">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="alert color-text-2 text-center" role="alert">
              <h3>Ranking de usuarios con más <b>Historias</b> para contar</h3>
            </div>
          </div>
        </div>
      </div>
    <!-- Ranking Usuarios -->
    <?php require_once 'Private/Components/ranking-users.php'?>
    <!-- Footer -->
    <?php require_once 'Private/Components/footer.php'?> 
    