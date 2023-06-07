<?php
print"<!DOCTYPE html>";
print"<html lang="es-mx">";
print<head>";
    print"<meta charset="UTF-8">";
    print"<title>CiTIM Grupo XB</title>";
    print"<link rel="stylesheet" href="css/problemaStem.css"/>";

    print"<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">";
    print"<script>";
print"function calcula_velocidadlineal()";
{
    // Datos
    print"var radioEstrella = 20;";
    print"var tiempoVuelta = 4.3;";
    print"var velocidadlineal = (2 * Math.PI * radioEstrella) / tiempoVuelta;";
    print"var aceleracionCentripeta = (4 * Math.pow(Math.PI, 2) * radioEstrella) / Math.pow(tiempoVuelta, 2);";
    print"console.log("La velocidad lineal es: " + velocidadlineal.toFixed(2) + " km/s");";
    print"console.log("La aceleración centrípeta es: " + aceleracionCentripeta.toFixed(2) + " km/s²");";
        
print"var d=document.getElementById("resultadoA");";
print"d.innerHTML=velocidadlineal+' km/s²';";
}
    print"</script>";
print"</head>";
print"<body>";
  print"<section class="wrapper">";
   print" <header>";
     print" <h1 class="logo"><a href="stem.html">CiTIM</a></h1>";
      
    print"</header>";
    print"<section id="contenedor">";
      print"<section  class="problema">";
       print" <h2>Problema: Si una estrella de neutrones tiene un radio de 20
km, Si a dicha estrella le lleva 4.3 segundos en
completar una vuelta ¿cuál es la velocidad lineal
y la aceleración centrıpeta de ésta? ́
 v=2piRestrella/T y a=4pi2Restrella/T2</h2>";
        printf"<p>Descripción:</p>";
        printf"<p>la velocidad lineal de la estrella de neutrones es aproximadamente 37.02 km/s y la aceleración centrípeta es aproximadamente 222.78 km/s². <br>";
        print"</p>";
      print"</section>";
      print"<section  class="esquemaProblema">";
        print"<h2>Esquema</h2>";
       print" <center>";
        print"<img class="imgProblema" src="images/veloclineal.jpg">";
        print"</center>";
      print"</section>";
      print"<section class="formulas">";
        print"<h2>Fórmulas</h2>";
        print"v = (2π * 20 km) / 4.3 s<br>
        a = (v²) / 20 km";
      
      print"</section>";
      print"<section class="datos">";
        print"<h2>Datos:</h2>";
     print" r = 20 km<br>
      s = 4.3 s";
    print"</section>";
      print"<section class="calculos">";
       print" <h2>Solución</h2>";
        print"<p> La velocidad lineal es de:<br>";
       print"   v = (2 * 3.1416 * 20 km) / 4.3 s<br>";
print"a = (4 * 3.1416² * 20 km) / (4.3 s)²";
         print" </p>";
        print"<button onclick="calcula_velocidadlineal();">Presiona para calcular</button>";
        print"</section>";
        print"<section class="resultado">";
        print" <h2>Resultado: </h2>";
        print"<div id="resultadoA"></div>";
        print"</section>";
        print" </section>";
        print"<footer class="pie">";
        print"Creative Commons versión 3.0 SciSoft 2023";
        print"</footer>";
        print"</section>";
        print"</body>";
        print"</html>";
?<php>