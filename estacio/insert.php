<?php 
session_start();
$user = $_POST["user"];
$pass = $_POST["pass"];



include("classes/Connect.php");
include("classes/Inserir.php");

$teste = new Inserir();
$teste->inserir($user,$pass);
header("Location: index.php?error=none");
