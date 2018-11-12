<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calcular Hipotenusa</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <section class="contorno">
    <header>
      <h1>Calcular Hipotenusa</h1>
    </header>
    <section class="imagen">
      <img src="./triangulo-hipotenusa-sincontorno.svg" alt="triangulo con sus catetos e hipotenusa">
    </section>
    <form enctype="multipart/form-data" action="subir-r.php" method="post">
        <input type="text" name="primerCateto" required placeholder="Longitud del primer cateto">
        <input type="text" name="segundoCateto" required placeholder="Longitud del segundo cateto">
        <input type="submit" name="A" value="Calcular">
    </form>       
    </section>
  </body>
</html>
