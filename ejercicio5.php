<!--realice un algoritmo que calcule el area y el perimetro de un rombo y lo muestre en pantalla.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
  <?php
          $valor['a']="8";
          $valor['b']="4";

          $area=($valor["a"]*$valor["b"])/2;
          echo "El Área del rombo es: $area </br>";

          $cat1=($valor["a"]/2);
          $cat2=($valor["b"]/2);
          $hipotenusa1=($cat1*$cat1)+($cat2*$cat2);
          $hipotenusa2=sqrt($hipotenusa1);
          $perimetro=$hipotenusa2*4;

          echo "El perimetro del rombo es: $perimetro";

   ?>
  </body>
</html>
