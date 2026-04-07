<?php
require_once "./functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio-Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
</head>
<body>


    <div class="container">
        <h1 class="text-center mt-4">IL TUO NEGOZIO DI DISCHI</h1>



        <div class="bg-dischi">
            <div class="row">

                <?php
                foreach ($dischi as $disco){
                ?>

                <div class="col-12 col-md-4 col-lg-3">

                  <div class="card">
                        <img class="card-img-top" src="<?php echo $disco["cover"]?>" alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $disco["titolo"]?></h5>
                            <p class="card-text"><? echo $disco["artista"]?></p>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Anno: <?php echo $disco['anno']; ?></li>
                            <li class="list-group-item"><?php echo $disco['genere']; ?></li>
                                            </ul>
                
                    </div>  
                </div>
                <?php } ?>
                    

            </div>
            

        </div>

  
        <footer>
        <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="footer-logo">Vinyl Heaven 1970</span>
                <p class="powered-by">
                    © 2026 • All Rights Reserved • Powered by <span>Luca Riggi</span>
                </p>
                
                <div class="mt-3">
                    <a href="#" class="footer-link small">Home</a>
                    <a href="#" class="footer-link small">Archivio</a>
                    <a href="#" class="footer-link small">Contatti</a>
                </div>
                
                <div class="mt-4" style="opacity: 0.3; font-size: 2rem;">
                    ✌️ 🎸 🕺 🌈
                </div>
            </div>
        </div>
         </div>
        </footer>
    </div>
    
</body>
</html>