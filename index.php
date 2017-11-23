<?php

require_once(realpath("resources/config.php"));

require_once(LIBRARY_PATH . "/templateFunctions.php");

$setInIndexDotPhp = "Hello World!";

$variables = array(
    'setInIndexDotPhp' => $setInIndexDotPhp
);

if($segments[0]=='hello')
    renderLayoutWithContentFile("home.php", $variables);
else
    renderLayoutWithContentFile("home.php", $variables);

?>