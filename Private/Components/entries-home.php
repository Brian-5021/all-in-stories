        <?php require_once 'Private/Actions/functions.php'?>
        <?php require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Private\Components\header.php'?>


        <div class="container" id="entries">
            <div class="row">
                <?php 
                
                    $entries = getLastEntries($db);

                    if(!empty($entries)):

                    while($entrie = mysqli_fetch_assoc($entries)):
                
                ?>
            <div class="col-sm-12 col-md-4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="https://www.eluniversal.com.mx/sites/default/files/2020/04/07/tours_terror_cuarentena.jpg">
                        <span class="card-title"><?=$entrie['titulo']?></span>
                        
                
                        <a class="btn-floating halfway-fab waves-effect waves-light red" href="www.google.com"><i class="material-icons">remove_red_eye</i></a>
                    </div>
                    <div class="card-content">
                        <p><?= substr($entrie['descripcion'], 0, 180). "..."?></p>
                    </div>
                    <span class="fecha"><?=$entrie['categoria']. ' | '.$entrie['fecha'] ?></span>
                </div>  
            </div>

            <?php          
                endwhile;
            endif;

        ?>
        </div>