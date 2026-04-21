<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<nav class="sidebar">
    <button> Início</button>
    <button> Pesquisa</button>
    <button> Nova Postagem</button>
    <button> Perfil</button>
</nav>

<main class="conteudo">

<div class="perfil">
    <img src="img/joker-persona-video.webp">
    <h2><?= $_SESSION["usuario"] ?></h2>
</div>

<div class="postagem-form">
<form method="POST">
<input name="texto" placeholder="Post...">
<button name="postar">Postar</button>
</form>
</div>

<?php foreach ($posts as $i => $post): ?>
<div class="post">
    <div class="post-header">
        <img src="img/joker-persona-video.webp">
        <strong><?= $post["usuario"] ?></strong>
    </div>

    <p><?= $post["texto"] ?></p>

    <form method="POST">
        <input type="hidden" name="index" value="<?= $i ?>">
        <button name="curtir" <?= $post["curtido"] ? "disabled" : "" ?>>
            ❤️ <?= $post["curtidas"] ?>
        </button>
    </form>
</div>
<?php endforeach; ?>

</main>
</div>

</body>
</html>