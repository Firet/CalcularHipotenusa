<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>Calcular Hipotenusa</title>
      <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <section class="contorno">  
      <h1>Calcular Hipotenusa</h1>
      <p class="resultado">Dada la longitud del primer cateto: </p> 
      <?php
        $primerCat = $_POST["primerCateto"];
        echo "$primerCat ";
      ?>
      <p class="resultado"> y la del segundo cateto: </p> 
      <?php 
        $segundoCat = $_POST["segundoCateto"];
        echo $segundoCat;
      ?>
      <p class="resultado">La longitud de la hipotenusa es: </p>
      <?php
        $hipotenusa = sqrt(pow($primerCat, 2) + pow($segundoCat, 2));
        // Cambio notacion de numeros y dejo solo dos decimales 
        $hipotenusaConComas = number_format($hipotenusa, 2, ',', '.');
        echo $hipotenusaConComas . "<br>";       
      ?>
    </section>
  </body>
</html>
