<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-login">
<h2>Cadastro</h2>

<p class="erro"><?= $erro ?></p>

<form method="POST">
<input name="nome" placeholder="Nome">
<input name="email" placeholder="Email">
<input type="password" name="senha" placeholder="Senha">
<input type="password" name="confirmar" placeholder="Confirmar">
<button>Cadastrar</button>
</form>

<a href="?page=login">Voltar</a>
</div>

</body>
</html>