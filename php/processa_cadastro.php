<?php
session_start();
if(isset($_POST['acao'])) {
    $_SESSION['email'] = $_POST['email'];
    header("Location: inicial.php");
    exit();
}
?> 