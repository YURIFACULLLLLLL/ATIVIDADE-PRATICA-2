<?php
session_start();
$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

 
    if ($email == "teste@email.com" && $senha == "123456") {
        $_SESSION["usuario"] = "Yuri Salim";
        header("Location: feed.php");
        exit();
    } else {
        $erro = "Email ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-login">
    <h2>Login</h2>

    <?php if ($erro): ?>
        <p class="erro"><?php echo $erro; ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>

    <p><a href="cadastro.php">Criar conta</a></p>
</div>

</body>
</html>
