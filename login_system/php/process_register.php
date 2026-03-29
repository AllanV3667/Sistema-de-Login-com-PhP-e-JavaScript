<?php
include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// verifica email duplicado
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    header("Location: /login_system/register.php?erro=email");
    exit;
}

// insere no banco
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

if ($stmt->execute()) {
    header("Location: /login_system/index.php?sucesso=1");
    exit;
} else {
    header("Location: /login_system/register.php?erro=geral");
    exit;
}
?>