<?php

$email = $_POST['email'];
$senha = $_POST['senha'];


if (empty($senha) || empty($email)) {
    header('location: index.php?null');
}
else
{
    require_once "conexao.php";
    $con = new Connect();
$con->verificalogin($email,$senha);
// if ($con == true) {
//     header('location: index.php?existe');
// }
}
