<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

<div class="container">

    <h1>Login</h1>
    <?php if (isset($_GET['erro'])): ?>
    <p style="color: red;">
        <?php
            if ($_GET['erro'] == 'senha') {
                echo "Senha incorreta";
            } elseif ($_GET['erro'] == 'usuario') {
                echo "Usuário não encontrado";
            }
        ?>
    </p>
<?php endif; ?>

    <form action="php/login.php" method="POST">

        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Senha" required><br>

        <div class="botoes">
        <button type="submit">Entrar</button>
        <button type="button" onclick="window.location.href='/login_system/register.php'">
            Criar conta
        </button>
        </div>
    </form>
</div>
</body>

<script src="js/script.js"></script>
</html>