<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$name= "test";
$value= "Cookie is set";
setcookie($name, $value);

echo $_COOKIE[$name]; echo '<pre>';

if(isset($_COOKIE[$name]))
{
    echo 'inn';
}
?>

