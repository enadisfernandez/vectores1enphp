<!--calcular la paga neta de un trabajador conociendo el numero de horas trabajadas, la tarifa horaria y la tasa de impuestos-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
          <h5>Horas trabajadas=20</h5>
          <h5>Tarifa horaria=15000</h5>
          <h5>Tasa de impuestos=200000</h5>

          <?php

          $numero['ht']=20;
          $numero['th']=15000;
          $numero['ti']=200000;



          $total=($numero['ht']*$numero['th'])-$numero['ti'];
           echo "El pago del trabajador es: $total ";


     ?>

  </body>
</html>
