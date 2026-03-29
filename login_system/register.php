<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
    <h1>Cadastro</h1>
    <?php if (isset($_GET['erro'])): ?>
        <p style="color: red;">
            <?php
                if ($_GET['erro'] == 'email') {
                    echo "Este email já está cadastrado";
                } elseif ($_GET['erro'] == 'geral') {
                    echo "Erro ao cadastrar";
                }
            ?>
        </p>
    <?php endif; ?>

    <form action="php/process_register.php" method="POST">
        <input type="text" name="name" placeholder="Nome" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Senha" required><br>
        <div class="botoes">
            <button type="submit">Cadastrar</button>
        </div>
    </form>

</div>

</body>
</html>