<?php 
session_start();
if(isset($_POST["submit"])) {

      $uid = $_POST["uid"];
      $pwd = $_POST["pwd"];
      
      
    
      include("../classes/login.classes.php");
      include("../classes/logincontr.classes.php");

      $login = new loginContr($uid,$pwd);

      $a = $login->loginUser();
      header("Location: ../index.php?error=sacarola");
}