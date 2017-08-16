<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paga Neta Trabajador.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

      <?php
        $info=array('cafe','marron','cafeina');

        //enumerar todas las variables
        list($bebida,$color,$energia)=$info;
        echo "El $bebida es $color y la $energia lo hace especial. \n";


        list($bebida,$color,$energia)=$info;
        echo "El $bebida tiene $energia. \n";

        
        list($energia)=$info;

        echo "Necesito $energia! \n";      ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
