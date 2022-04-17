<?php 
// Killing Session. 

session_start();

include './aaLayoutDefs.php';

include './aaHeader.php';

layout_2_8_2('','<h4>Login Your Out from Private</h4><p>Thank for Login in we have loged you our as per your request</p>','');


unset($_SESSION["ID_Account"]);
unset($_SESSION["LoggedAccount"]);
header("Location:index.php");

include './aaFooter.php';
//session_destroy();