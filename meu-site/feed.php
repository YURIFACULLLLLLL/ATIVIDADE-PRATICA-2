<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}

if (!isset($_SESSION["posts"])) {
    $_SESSION["posts"] = [];
}


if (isset($_POST["postar"])) {
    $texto = trim($_POST["texto"]);

    if (!empty($texto)) {
        $post = [
            "usuario" => $_SESSION["usuario"],
            "texto" => $texto,
            "curtidas" => 0
        ];

        array_unshift($_SESSION["posts"], $post);
    }
}

if (isset($_POST["curtir"])) {
    $index = $_POST["index"];
    $_SESSION["posts"][$index]["curtidas"]++;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Feed</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<nav class="sidebar">
    <button>🏠 Início</button>
    <button>👤 Perfil</button>
</nav>

<main class="conteudo">

<div class="perfil">
    <img src="img/joker-persona-video.webp">
    <div>
        <h2><?php echo $_SESSION["usuario"]; ?></h2>
        <p>@uswgiruy</p>
    </div>
</div>

<div class="postagem-form">
    <form method="POST">
        <input type="text" name="texto" placeholder="Quais são as novidades?">
        <button name="postar">Postar</button>
    </form>
</div>

<?php foreach ($_SESSION["posts"] as $index => $post): ?>
<div class="post">
    <strong><?php echo $post["usuario"]; ?></strong>
    <p><?php echo $post["texto"]; ?></p>

    <form method="POST">
        <input type="hidden" name="index" value="<?php echo $index; ?>">
        <button name="curtir">
            ❤️ <?php echo $post["curtidas"]; ?> curtidas
        </button>
    </form>
</div>
<?php endforeach; ?>

</main>
</div>

</body>
</html>
