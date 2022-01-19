<?php
header('Content-type: text/plain');
require_once ('archives/vendor/autoload.php');
use \Statickidz\GoogleTranslate;

//Verifica si existe "I", y si no existe lo pone en español.
if(!isset($_GET["I"]))
{
    $lang = 'es';
}
else { $lang = $_GET["I"]; }
/*
//Verifica si existe "L", y si no existe lo pone en inglÃ©s.
if(!isset($_GET["L"]))
{
    $idioma = 'en';
}
else { $idioma = $_GET["L"]; }*/
//
$texto = $_GET["T"];

$trans = new GoogleTranslate();
$r_pt = $trans->translate($lang, 'pt', $texto);
$r_en = $trans->translate($lang, 'en', $texto);
$r_es = $trans->translate($lang, 'es', $texto);

//Saliente
echo "$r_es ~ $r_en ~ $r_pt";
?>
