<?php

$text1="progbasma123@gmail.com";
$pattern1="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
echo preg_match_all($pattern1, $text1); // Outputs 1
if(preg_match_all($pattern1, $text1))
{
    echo"<br>This is email using preg match";
}
else{
    echo"<br>This is not email using preg match";

}
echo"<br>";
echo filter_var($text1,FILTER_VALIDATE_EMAIL);
if(filter_var($text1,FILTER_VALIDATE_EMAIL))
{
    
    echo"<br>This is email using  filter var";
}
else{
    echo"<br>This is not email using  filter var";
}


$email2="<b>progbasma123@gmail.com</b>";
echo "<br>".filter_var($email2,FILTER_SANITIZE_STRING);

/************************************* */
date_default_timezone_set('Africa/Cairo');

/*time()+time in seconds*/
echo"<br>".date('l jS \of F Y h:i:s A',time()+(86400));
/*mktime(hour, minute, second, month, day, year)
*/
echo"<br>".date('l jS \of F Y h:i:s A',mktime(11, 14, 54, 8, 12, 2014));



echo"<br>".date('l jS \of F Y h:i:s A',strtotime("10:30pm 04/15/2014"));

echo"<br>".date('l jS \of F Y h:i:s A',strtotime("+2years -1month +2hours "));
echo"<br>".date('l jS \of F Y h:i:s A',strtotime("previous sunday"));
?>