<?php

# i love php
// lets go
/* test write*/ 
$Name = "foda";

echo 'we love php';
echo '<br>';
echo 'we love php';
echo '<br>';
echo gettype(true);
echo '<br>';
echo gettype(100);
echo '<br>';
echo gettype(10.5);
echo '<br>';
echo gettype("hello");
echo '<br>';
echo gettype(array("eg" , "ksa"));
echo '<br>';
echo gettype(["eg" , "ksa"]);
echo '<br>';
echo gettype(1+"5");
echo '<br>';
echo (true);
echo '<br>';
echo gettype(10.5+10.5);
echo '<br>';
echo  (int) (10.5+10.5);
echo '<br>';
echo gettype((int)10.5+(int)10.5);
echo '<br>';
var_dump((bool)"");
echo '<br>';
var_dump((bool)array(1));
echo '<br>';
var_dump((bool)array());
echo '<br>';
var_dump((bool)100);
echo '<br>';
var_dump((bool)"hello");
echo '<br>';
var_dump((bool)"");
echo '<br>';
echo "hello 'php'";
echo '<br>';
echo 'hello "php"';
echo '<br>';
echo 'hello \'php\'';
echo '<br>';
echo nl2br/*new line to br*/('hello php
on multiple
lines'
);
echo '<br>';
echo <<<"Here"
Hello PHP
special characters $$$ ' ' ' """"" \\\\
Hello my Name is $Name
Here;
echo '<br>';
echo <<<"navlinks"
<ul>
<li>$Name</li>
<li>$Name</li>
<li>$Name</li>
<li>$Name</li>
</ul>
navlinks;


echo '<br>';
echo '<pre>';
print_r([
 "A" =>"Ahmed" ,  
 "B" =>"omar" ,  
 "foda"
]);
echo '</pre>';

echo '<br>';

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>php page</title>
// </head>
// <body>
//     <div></div>
// </body>
// </html>
echo '<br>';
$username = "abdulla";
$$username ="school";
echo $username ;


echo '<br>';
echo $$username;
echo '<br>';
echo $abdulla ;
echo '<br>';
$a="hii";
$b=&$a;// &>> referance with each other
$b="school";
$a="siiiii";
echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $_GET["username"];
echo '<br>';
define("main_numbers",5); //>>constant ...(name,value)
echo main_numbers *10;
echo '<br>';
echo php_uname(); // information about your windows
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __dir__;
echo '<br>';
var_dump(100=="100");
echo '<br>';
var_dump(100.0=="100");
echo '<br>';
var_dump(100<=>100);
echo '<br>';
var_dump(100>50 xor 100>150); //xor => mean one of operation is true only
echo '<br>';
$x="abdulla";
$b="mamdouh";
$y="foda";
echo $x." ".$b." ".$y ; //{.} => call concatenate
echo '<br>';
$A="a ";
$A.="b";// mean A=A+b
$A.=" c";// mean A=A+c
echo $A;
echo '<br>';
$arr1 = [1 =>"a", 2 =>"b" ];
$arr2 =[3 =>"c", 4 =>"d"];
$arr3= $arr1+$arr2;
echo '<pre>';
print_r($arr1+$arr2);
print_r($arr3);
echo '</pre>';


echo '<br>';
$arr3 = [1 =>"10", 2 =>"20" ];
$arr4 =[2 =>20, 1 =>10];
var_dump($arr4==$arr3); //equal
echo '<br>';
$arr3 = [1 =>10, 2 =>20 ];
$arr4 =[1 =>10, 2 =>20];
var_dump($arr4===$arr3);//=== mean identical
echo '<br>';
$f=10;
$g=@$f or die ("not found");//or die ("......")=> control in messages what you see ,@ => hide warning message
echo $g;
echo '<br>';
echo 10 || false;
echo '<br>';
$c= 10 || false;
echo $c;
echo '<br>';
echo 10 or false;
echo '<br>';
$s= 10 or false;//  || has priority to apply ,,or has not
echo $s;
echo '<br>';
if (10>11){
    echo "yes 1";
}else if (10>6){

    echo "yes 2";
}
else {
    echo "no";
}
echo '<br>';
// if(10 > 5) :

// echo "one";

// elseif(10 > 6)

// echo "two";

// else :

// echo "none";

// endif; //#######

echo '<br>';
// echo condition ? True : false ;    ====>ternary (short) if condition
echo '<br>';
echo '<br>';

?>



<form action="" method="get">
    <input type=text name ="username">
    <input type=submit value ="send">
</form>