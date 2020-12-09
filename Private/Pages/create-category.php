<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Actions/redirection.php'; ?>
<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Components/navbar.php'; ?>
<?php 

if(!isset($_SESSION)) {
  header("Location: index.php");
}

 ?>

<div class="container mt-5">
    <div class="row">
    <div class="card" style="width: 100%;">
  <img src="https://s3.amazonaws.com/prod.assets.thebanner/styles/article-large/s3/article/large/TIN-332%20Books%20from_large.jpg?itok=goIsOQs0" class="card-img-top" alt="..." style="height:150px;">
  <div class="card-body">
    <h5 class="card-title">Crea tu categoría</h5>
    <p class="card-text"> Añade nuevas categorias al blog para que los usuarios puedan usuarlas al crear las entradas</p><br><br>

    <form action="../Actions/save-category.php" method="POST">
        <div class="form-group">
            <label for="inputName"><h5>Nombre de la categoría</h5></label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Digita el nombre de la categoría" name="name">
        </div>
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    </form>
  </div>
</div>
    
    </div>
</div>

<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Components/footer.php'; ?>