<?php
session_start();
unset($_SESSION['Id']);
unset($_SESSION['nome']);
unset($_SESSION['senha']);
unset($_SESSION['email']);
unset($_SESSION['telefone']);
unset($_SESSION['endereco']);

header('location:index.php');
?>