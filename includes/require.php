<?php


// include './../testapi/getproducts.php';



function getlang() {
    global $language;

    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
    } else {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }

    if ($lang == 'fr') {
        include 'fr.php';
        $htmlLang = "fr";

    } else if ($lang == 'ru') {
        include 'ru.php';
        $htmlLang = "ru";     
    } else { 
        include 'en.php';
        $htmlLang = "en";     
    }

    return $lang;
}

$getlang = getlang();


// Build the full URL including the language query parameter
$fullUrl = 'https://' . $_SERVER['HTTP_HOST'] . htmlentities($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');

// Append the 'lang' query parameter
$fullUrl .= (strpos($fullUrl, '?') === false ? '?' : '&') . "lang=" . $getlang;



$canonicalUrl = $fullUrl;

?>
