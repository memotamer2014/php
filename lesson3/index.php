<?php

$x=3;
$y=4;

/*

superglobals
built in variables

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/
echo "<br>".$_SERVER['PHP_SELF'];
echo "<br>".$_SERVER['HTTP_REFERER'];
echo "<br>".$_SERVER['REQUEST_METHOD'];
echo "<br>".$_SERVER['QUERY_STRING'];

echo"<pre>";
var_dump($_SERVER);
echo "<br>****************<br>";
var_dump($GLOBALS['_GET']);

echo "<br>****************<br>";
var_dump($GLOBALS['_SERVER']);


?>