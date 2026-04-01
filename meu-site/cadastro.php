<?php
$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar = $_POST["confirmar"];
    $data = $_POST["data"];
    $genero = $_POST["genero"];

    if (
        empty($nome) || empty($username) || empty($email) ||
        empty($senha) || empty($confirmar) || empty($data) || empty($genero)
    ) {
        $erro = "Preencha todos os campos!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Email inválido!";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[0-9]).{6,}$/", $senha)) {
        $erro = "Senha fraca! (mín 6 caracteres, 1 maiúscula e 1 número)";
    } elseif ($senha != $confirmar) {
        $erro = "As senhas não coincidem!";
    } else {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-login">
    <h2>Cadastro</h2>

    <?php if ($erro): ?>
        <p class="erro"><?php echo $erro; ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="nome" placeholder="Nome completo" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="password" name="confirmar" placeholder="Confirmar senha" required>
        <input type="date" name="data" required>

        <select name="genero" required>
            <option value="">Gênero</option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Outro</option>
        </select>

        <button type="submit">Cadastrar</button>
    </form>

    <p><a href="index.php">Voltar</a></p>
</div>

</body>
</html>
