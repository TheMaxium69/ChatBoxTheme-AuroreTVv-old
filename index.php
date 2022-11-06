<?php

require_once "modules/head.phtml";

$from = "TheMaximeSan";
$messageId = "12398123089120";
$message = "Je suis un message test";

$color = "red"; /* user color */
$background_color = "transparent";
$font_size = "22px";
$text_color = "white";
$message_hide_delay = "0s";

// CSS CODE
require "chatbox_code/chatbox_css.phtml";

$x = 0;    
while($x <= 10){

    // HTML CODE
    require "chatbox_code/chatbox_html.phtml";
    
    $x++;

}

// JS CODE
require "chatbox_code/chatbox_js.phtml";  


require_once "modules/end.phtml";

?>

