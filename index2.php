<h2>*******4*******</h2>
<!-- Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)
Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių; -->

<?php
echo '<pre>';
function arDalijasi(int $skaicius) {
    $dividers = 0;
    for($i = 2; $i < $skaicius; $i++) {
        if($skaicius % $i === 0) {
            $dividers++;
        }
    }
    return $dividers;
}

echo arDalijasi(11);
// // foreach($data as $items) {
// //     echo $items;
// // }
// print_r($data);
?>

<h2>*******5*******</h2>
<!-- Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77.
Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją. -->

<?php
$masyvas5 = [];
foreach(range(1, 3) as $index => $value) {
    $masyvas5[$index] = rand(2, 44);
}
print_r($masyvas5);

function sortinimas($a, $b) {
    return arDalijasi($b) <=> arDalijasi($a);
}

usort($masyvas5, "sortinimas");
print_r($masyvas5);

foreach($masyvas5 as $index => $value) {
    echo "Skaicius $value dalijasi is: ". arDalijasi($value) . ' sveikuju skaiciu; <br>';
}
?>

<h2>*******6*******</h2>
<!-- Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777.
Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius. -->

<?php
$masyvas6 = [];
foreach(range(1, 10) as $index => $value) {
    $masyvas6[] = rand(333, 777);
}
print_r($masyvas6);
$ilgis = count($masyvas6); //i kintamaji, nes jeigu cikle, tai su kiekvienu ciklu masyvas trumpeja

for($i = 0; $i < $ilgis; $i++) {
    if(arDalijasi($masyvas6[$i]) === 0) { //jeigu 0 sveikuju skaiciu
        unset($masyvas6[$i]);
    }
}
print_r($masyvas6);
?>