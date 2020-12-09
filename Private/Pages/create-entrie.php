<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Actions/redirection.php'; ?>
<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Components/navbar.php'; ?>
<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Actions\functions.php'?>
<?php 

if(!isset($_SESSION)) {
  header("Location: index.php");
}

 ?>

<div class="container mt-5">
    <div class="row">
    <div class="card" style="width: 100%;">
  <img src="https://media.wsimag.com/attachments/2f10e01cb926f0839296045a6bfa93cf154f2b62/store/fill/1090/613/d8b2fea5b57c51d37192a1be04cc32b660b3e6ed279f2fd37d18df7990e2/Escribir-un-diario.jpg" class="card-img-top" alt="..." style="height:150px;">
  <div class="card-body">
    <h5 class="card-title">Crea tu historia y compartela con el mundo</h5>
    <p class="card-text"> Añade nuevas historias a nuestro sitio para que así el mundo conozca tu talento.</p><br><br>

    <form action="../Actions/save-entrie.php" method="POST">
        
            <label for="inputTitle"><h5>Título:</h5></label>
            <input type="text" class="form-control" id="title" aria-describedby="" placeholder="Digita el titulo de la entrada" name="title">
            <label for="inputDescription" class="mt-2"><h5>Descripción:</h5></label>
            <textarea  class="form-control" id="description" name="description"></textarea>
            <label for="inputDescription" class="mt-4"><h5>Selecciona una categoría:</h5></label>
               
        
        <select name="category" style="display: block;" class="mb-2">
              <?php
                $categorias = getCategories($db);
                var_dump($categorias);
                if(!empty($categorias)):
                  while($categoria = mysqli_fetch_assoc($categorias)):
              ?>
              <option value="<?=$categoria['id']?>">
                    <?=$categoria['nombre']?>
              </option>
              <?php
                  endwhile;
                endif;
              ?>
            </select>
            
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    </form>
  </div>
</div>    
    </div>
</div>

<?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Components/footer.php'; ?>