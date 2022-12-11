<?php
echo"<pre>";


//var_dump($_POST);
var_dump($_REQUEST);

if(isset($_GET['email']))
{
    echo"<br>".$_GET['email'];
    echo"<br>".$_GET['password'];

}
else{
    echo"<br> NO DATA FPUND";
}
/*
if($_SERVER['REQUEST_METHOD']=='POST')
{

}
*/
if(isset($_POST['email']))
{
    echo"<br>".$_POST['email'];
    echo"<br>".$_POST['password'];

}


echo"<br>".$_SERVER['REQUEST_METHOD'];
echo"<br>".$_SERVER['QUERY_STRING'];
//echo"<br>".$_GET['phone'];
?>