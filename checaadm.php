<?php
include("./includes/conexao.php");


if ($_SESSION['isadmin'] != 1)
{
    header('Location: index.php');
}

?>