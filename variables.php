<?php
// Variables with rules
// 1st - a variable starts with a $ sign
$var='hii';
// 2nd - a variable name cannot start with a number
    //$1var='hii';  this will give error
// 3rd - a variable name must start with a letter or an underscore
$var1='hii';
$_var2='hii';
// 3rd - a variable name can only contain alpha-numeric characters and underscores
$variable1_name='hii';
// 4th - variable names are case-sensitive
$name="hii";
$Name='hii';
$NAME='hii';

echo $var;
echo "<br>";
echo $var1;
echo "<br>";
echo $_var2;
echo "<br>";
echo $variable1_name;
echo "<br>";
echo $name;
echo "<br>";
echo $Name;
echo "<br>";
echo $NAME;

?>