<?php

require_once "modules/head.phtml";

$from = [
    "TheMaximeSan",
    "AuroreTVv",
    "TheMaxium69",
    "FoxyGirlFR",
    "AuroreSurTwitch",
    "DoubleT",
    "MaximeEstUnBG",
    "AuroreEqualMyGirlFriend"
];
$messageId = "12398123089120";
$message = [
    "Je suis un message test, et je t'aime mon chou ! oui j'ecrit un gros message pour te montré le rendu sur ton stream",
    "coucou",
    "Je suis un message test",
    "je t'aime mon chou",
    "oui j'ecrit un gros message",
    "Bonjour",
    "0611112669",
    "https://tyrolium.Fr"

];

$color = "red"; /* user color */
$background_color = "#17242D";
$font_size = "16px";
$text_color = "#E40000";
$message_hide_delay = "0s";

// CSS CODE
require "chatbox_code/chatbox_css.phtml";

$x = 0;    
while($x <= 7){

    // HTML CODE
    require "chatbox_code/chatbox_html.phtml";
    
    $x++;

}

// JS CODE
require "chatbox_code/chatbox_js.phtml";  


require_once "modules/end.phtml";

?>

