<?php 
  include "header.php";

  if(isset($_GET["home2"])){
    include "home.php";
  }else if(isset($_GET["home"])){
    include "home.php";
     }else if(isset($_GET["if"])){
    include "if.php";
     }else if(isset($_GET["ifelse"])){
    include "ifelse.php";
  }else if(isset($_GET["bilangan"])){
    include "bilangan.php";

  }else{
    include "home.php";
  }

  include  "footer.php";
?>