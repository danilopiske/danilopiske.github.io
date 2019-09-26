<?php
include("./includes/conexao.php");


if ($_SESSION["isloggedin"] != 1)
{
    header('Location: index.php');
}	
?>