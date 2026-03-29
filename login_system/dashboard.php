<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
    <h1>Bem-vindo, <?php echo $_SESSION['user_name']; ?></h1>
    <a href="php/logout.php">Sair</a>
</div>

</body>
</html>