<?php
include ('sendEmail.php');
require 'input-code.php';

if (isset($_POST['verificar'])){
    $codigo = $_POST['codigo'];
    if ($codigo == $_SESSION['num']){
        header('Location: success.php'); 
        die();
    } else {
        header('Location: failed.php'); 
        die();
    }
}

?>