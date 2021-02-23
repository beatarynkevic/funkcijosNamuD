<h2>*******7*******</h2>
<!-- Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10,
o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų.
Paskutinio masyvo paskutinis elementas yra lygus 0; -->

<?php
echo '<pre>';
function generateFuncion($rand) {
    $masyvas = [];
    $num = rand(10, 20); //rand ilgio masyvas

    for($i = 0; $i < $num; $i++) {
        if($i < ($num - 1)) {
            $masyvas[$i] = rand(0, 10);
        } else {
            if($rand > 0) {
                $masyvas[$i] = generateFuncion($rand - 1);
            } else {
                $masyvas[] = 0;
            }
        }
    }
    return $masyvas;
}

print_r(generateFuncion(rand(10, 30)));

?>

<h2>*******8*******</h2>
<!-- Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. -->
<?php
function countRecursiveArrayValues($array) {
    $sum = 0;
    foreach ($array as $element) {

        if(!is_array($element)) {
            $sum += $element;
        } else {
            $sum += countRecursiveArrayValues($element);
        }
    }
    return $sum;
}

echo 'Masyvo reiksmiu suma: '.countRecursiveArrayValues($print);

?>

<h2>*******9*******</h2>
<!-- Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33.
Jeigu tarp trijų paskutinių elementų yra nors vienas sudetinis (ne pirminis skaičius), prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33.
Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento.  -->

<?php
$masyvas9=[];
foreach (range(1, 3) as $key => $value) {
    $masyvas9[$key] = rand(1, 33);
}
print_r($masyvas9);

function pirminis($int) {
    for ($i = 2; $i < $int; $i++) {
        if ($int % $i == 0) {
            return false;
        }
    }
    return true;
}


while (pirminis($masyvas9[count($masyvas9) - 1]) || pirminis($masyvas9[count($masyvas9) - 2]) || pirminis($masyvas9[count($masyvas9) - 3])) //jeigu sudetinis, tai prideti elementa
{
    $masyvas9[] = rand(1, 33);
}

print_r($masyvas9);
?>

<h2>*******10*******</h2>
<!-- Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100.
Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3.
Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite.  -->

<?php
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = [];
    for ($j = 0; $j < 10; $j++) {
    array_push($array[$i], rand(1, 100));
    }
}
echo '<pre>';
print_r($array);
echo '</pre>';

function vidurkis ($input) {
$suma = 0;
$count = 0;
foreach ($input as $value) {
    foreach ($value as $_) {
        if (pirminis($_)) {
            $suma += $_;
            $count++;
        }
    }
}
return $suma / $count;
}

echo vidurkis($array);
echo '<br><br>';

function maziausias ($input) {
    $maziausias = 101;
    foreach ($input as $value) {
        foreach ($value as $val) {
                if ($val < $maziausias) {
                    $maziausias = $val;
                }
            }
        }
        return $maziausias;
}
$x = maziausias($array);

while (vidurkis($array) < 70) {
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            if ($array[$i][$j] == $x) {
                $array[$i][$j] = $x + 3;
                break 2;
            }
        }
    }
    $x = maziausias($array);
    }
echo '<br><br>';
echo vidurkis($array);
echo '<br><br>';
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>
