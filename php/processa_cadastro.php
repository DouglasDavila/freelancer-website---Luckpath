<?php
session_start();
if(isset($_POST['acao']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    header("Location: inicial.php");
    exit();
}
?> 