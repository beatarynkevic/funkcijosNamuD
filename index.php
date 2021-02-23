<h2>*******1*******</h2>
<!-- Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą; -->
<?php
function insert($text)
{
    echo "<h1 style='color:purple';>$text</h1>";
}

insert("hiiiiiiiiii feed me now or hack, yet scratch my tummy actually i hate you now fight me");
?>

<h2>*******2*******</h2>
<!-- Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6).
Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją; -->
<?php
function insert2($text, $number)
{
    echo "<h$number style='color:orange';>$text</h$number>";
}
insert2("caaaaaaaaaaaaaaat", rand(1, 6));
?>

<h2>*******3*******</h2>
<!-- Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą.
Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio)
Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback(); -->

<?php
// Generate Random Hexadecimal String
$randomString = substr(md5(time()), 0, 16);
echo "<h4 style='color:coral';>$randomString</h4>";
$pattern = '/[0-9]+/';

function headerPrint($text) {
    foreach($text as $index => $_) {
        return "<h1> $text[$index] </h1>";
    }
}

function stringas($matches) {
    return headerPrint($matches);
}
$result = preg_replace_callback($pattern, "stringas", $randomString);
echo $result;
?>


<!-- **** kitoks 3uzd. sprenimas **** -->
<?php
echo '<br> kitoks sprendimas: <br>';
$kodas = md5(time());

function h1($text) {
    if(is_array($text)) {
        $text = $text[0];
    }
    return '<h1 style="display: inline">' .$text. '</h1>';
}
_d($kodas);

$result2 = preg_replace_callback('/\d+/', 'h1' , $kodas);                     //ka ieskom, kaip, kur
echo $result2;
?>