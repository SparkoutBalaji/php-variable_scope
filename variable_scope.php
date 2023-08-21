<?php

$local_variable = 1;


$global_variable = 2;

function matrix()
{
  global $global_variable;

  static $static_variable = 3;

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
echo "outside function local variable : $local_variable<br/><br/>";
echo "outside function local variable : $local_variable<br/><br/>";






?>
