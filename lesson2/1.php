<?php
printwelcome();
//echo "welcome";
$myname="ahmed";
echo "welcome ".$myname;

$degree=80;
if($degree>=50)
{
    echo"<br>passed";

}
else{
    echo "<br>failed";
}


for($x=0;$x<10;$x++)
{
    if($x==5)
    {
        continue;
    }
    echo "<br>".$x;
}
echo "<br>***********************<br>";

$y=0;
while($y<10)
{
   printwelcome();
    $y++;
}

echo "<br>***********************<br>";

$z=0;
do{
    echo "<br>".$z;
    $z++;
}
while ($z<10);


/*
function - method
1-user defined functions
2-builtin functions

*/

function printwelcome()
{
    echo "<br>Welcome all here from function";


}
printwelcome();



function addtwo($x,$y)
{
    return $x+$y;
}


echo "<br>".addtwo(10,20);
echo "<br>".addtwo(1,20);
echo "<br>".addtwo(30,20);
echo "<br>".addtwo(80,80);

echo"<br>".rand(10,20);



$x=['car1','car2','car3'];
echo"<br>";
print_r($x);
echo "<br>".$x[0];

echo"<pre>";
var_dump($x);


for($n=0;$n<count($x);$n++)
{
    echo"<br>".$x[$n];
}

foreach($x as $k)
{
    echo"<br>".$k;
}


$arr1=['car1','car2','car3'];
$arr2=array('car1','car2','car3');


$arr3=['car1'=>'BMW','car2'=>'MERCEDES','car3'=>'FIAT'];
echo"<br>".$arr3['car2'];
foreach($arr3 as $k=>$v)
{
    echo"<br>".$k ." = ".$v;
}

$arr4=array('car1'=>'BMW','car2'=>'MERCEDES','car3'=>'FIAT');

$questions=[
    ['qtitle'=>'what is html ','qop1'=>'Hyper text markup language','qop2'=>'Hyper td markup language','qop3'=>'Hyper text mn language','qanswer'=>'Hyper text markup language'],
    ['qtitle'=>'what is html ','qop1'=>'Hyper text markup language','qop2'=>'Hyper td markup language','qop3'=>'Hyper text mn language','qanswer'=>'Hyper text markup language'],
    ['qtitle'=>'what is html ','qop1'=>'Hyper text markup language','qop2'=>'Hyper td markup language','qop3'=>'Hyper text mn language','qanswer'=>'Hyper text markup language'],
    ['qtitle'=>'what is html ','qop1'=>'Hyper text markup language','qop2'=>'Hyper td markup language','qop3'=>'Hyper text mn language','qanswer'=>'Hyper text markup language']


];
?>