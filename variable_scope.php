<?php

$local_variable = 1;

$function_parameter = 2;

$global_variable = 3;

static $static_variable = 4;


function matrix()
{
  global $global_variable;

  global $static_variable;

  $static_variable++;

  echo "static variable : $static_variable <br/><br/>";

  $local_variable = 11;

  $local_variable++; //local variable one time increment the value

  echo "inside function local variable : $local_variable<br/><br/>";

  $global_variable = $global_variable *10;

  echo "global variable : $global_variable <br/><br/>" ;
}

matrix();
matrix();
matrix();




$local_variable++;

echo "outside function local variable : $local_variable<br/>";

$local_variable++;

echo "outside function local variable : $local_variable<br/>";

$local_variable++;

echo "outside function local variable : $local_variable<br/><br/>";



$static_variable++;

echo "outside function static variable : $static_variable<br/>";

$static_variable++;

echo "outside function static variable : $static_variable<br/>";

$static_variable++;

echo "outside function static  variable : $static_variable<br/>";



?>