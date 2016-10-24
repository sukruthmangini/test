<?php session_start(); 
$_SESSION['test'] = 'Sessionname';
$_SESSION['test2'] = 'Sessionname2';
//echo $_SESSION['test']; echo '<pre>';
//print_r($_SESSION['test2']); echo '<pre>';
echo '<pre>';
print_r($_REQUEST);
if(isset($_SESSION['testhjhj']))
{
include 'index.php';
}
else
{
session_destroy();
}
?>
