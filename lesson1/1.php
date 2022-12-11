<?php
//echo "welcome all here in lesson 1 php ";

//ghhhh
/*



*/
$x=10;
$issccessed=true;
$totaldegree=78;
$arr1=['car1','car2'];
$myname="ahmed";

echo "welcome ".$myname." here";
$x=10;
$x=(5*4+2**2/2)+25;
echo "<br>".$x;

$y=20;
//$y+=3;

$z='20';
echo"<br>".($y!==$z);

$z++;

echo ($issccessed==false || $totaldegree>=75);

if($totaldegree>=85)
{
    echo"<br>excellent";
}
elseif($totaldegree>=75)
{
    echo"<br>VeryGood";
}
elseif($totaldegree>=65)
{
    echo"<br>Good";
}
elseif($totaldegree>=50)
{
    echo"<br>succcessed";
}
else{
    echo"<br>failed";
}

$day=5;
switch ($day){

    case 1:
        echo"<br>saturday";
        break;
    case 2:
        echo"sunday";    
        break;
    case 3:
        echo"<br>monday";
        break;
    case 4:
        echo"<br>tuesday";
        break;
    case 5:
        echo"<br>wednesday";
        break;
    case 6:
        echo"<br>thursday";
        break;
    case 7:
        echo"<br>friday";
        break;
    default:
        echo"<br>no day";
        break;    

}
?>
