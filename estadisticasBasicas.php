<h1>Estadisticas Básicas</H1>
<H2>Ejercicio 1</H2>
<?php
$contadorCara = 0;
$contadorCruz = 0;
$random = 0;

for($i = 0; $i<1000; $i++){
    $random = rand(1,2);
    if($random==1){
    $contadorCara++;
    };
    if($random==2){
        $contadorCruz++;
    }
};
$porcentajeCara = $contadorCara *100/1000;
$porcentajeCruz = $contadorCruz*100/1000;
echo "<br><p>La cantidad de la Cara es $contadorCara<p>";
echo "<br><p>La cantidad de la Cruz es $contadorCruz<p>";
echo "<br><p>El porcentaje de la Cara es $porcentajeCara%<p>";
echo "<br><p>El porcentaje de la Cruz es $porcentajeCruz%<p>";
?>
<br>
<H2>Ejercicio 2 </H2>
<?php
    $contadorCara1 = 0;
    $contadorCara2 = 0;
    $contadorCara3 = 0;
    $contadorCara4 = 0;
    $contadorCara5 = 0;
    $contadorCara6 = 0;
    $random = 0;
    
    for($i = 0; $i<1000; $i++){
        $random = rand(1,6);

        switch ($random) {
        case '1':
        $contadorCara1++;
        break;
        case '2':
        $contadorCara2++;
        break;
        case '3':
        $contadorCara3++;
        break;
        case '4':
        $contadorCara4++;
        break;
        case '5':
        $contadorCara5++;
        break;
        case '6':
        $contadorCara6++;
        break;  
        };
    }
    $porcentajeCara1 = $contadorCara1 *100/1000;
    $porcentajeCara2 = $contadorCara2 *100/1000;
    $porcentajeCara3 = $contadorCara3 *100/1000;
    $porcentajeCara4 = $contadorCara4 *100/1000;
    $porcentajeCara5 = $contadorCara5 *100/1000;
    $porcentajeCara6 = $contadorCara6 *100/1000;
   
    echo "<br><p>La cantidad de la Cara 1 es $contadorCara1<p>";
    echo "<br><p>La cantidad de la Cara 2 es $contadorCara2<p>";
    echo "<br><p>La cantidad de la Cara 3 es $contadorCara3<p>";
    echo "<br><p>La cantidad de la Cara 4 es $contadorCara4<p>";
    echo "<br><p>La cantidad de la Cara 5 es $contadorCara5<p>";
    echo "<br><p>La cantidad de la Cara 6 es $contadorCara6<p>";
    echo "<br><p>El porcentaje de la Cara 1 es $porcentajeCara1%<p>";
    echo "<br><p>El porcentaje de la Cara 2 es $porcentajeCara2%<p>";
    echo "<br><p>El porcentaje de la Cara 3 es $porcentajeCara3%<p>";
    echo "<br><p>El porcentaje de la Cara 4 es $porcentajeCara4%<p>";
    echo "<br><p>El porcentaje de la Cara 5 es $porcentajeCara5%<p>";
    echo "<br><p>El porcentaje de la Cara 6 es $porcentajeCara6%<p>";
?>