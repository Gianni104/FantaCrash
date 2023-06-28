<?php
$flag = true; // Imposta il valore booleano a true

// Passa il valore booleano al file HTML utilizzando una variabile di sessione
session_start();
$_SESSION['flag'] = $flag;
?>

