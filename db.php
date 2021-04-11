<?php


    $server = "	sql310.epizy.com";
    $username = "epiz_26156819";
    $password = "M3xuz7x71KBC7hg";
    $dbname = "epiz_26156819_food";
	
    $conn = mysqli_connect($server, $username, $password, $dbname);

     if(!$conn){
     die("Connection failed:".mysqli_commect_error());
      }



?>