<?php

function redirect($url, $codigo = 303)
{
   header('Location: ' . $url, true, $codigo);
   die();
}

?>