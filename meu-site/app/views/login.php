<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-login">
<h2>Login</h2>

<p class="erro"><?= $erro ?></p>

<form method="POST">
<input type="email" name="email" placeholder="Email">
<input type="password" name="senha" placeholder="Senha">
<button>Entrar</button>
</form>

<a href="?page=cadastro">Criar conta</a>
</div>

</body>
</html>