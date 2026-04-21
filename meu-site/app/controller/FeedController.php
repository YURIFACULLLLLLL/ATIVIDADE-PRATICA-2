<?php
require_once "app/models/Post.php";

function feed() {

    if (!isset($_SESSION["usuario"])) {
        header("Location: ?page=login");
        exit();
    }

    if (!isset($_SESSION["posts"])) {
        $_SESSION["posts"] = [];
    }

    if (isset($_POST["postar"])) {
        $texto = trim($_POST["texto"]);
        if (!empty($texto)) {
            Post::create($texto, $_SESSION["usuario"]);
        }
    }

    if (isset($_POST["curtir"])) {
        Post::like($_POST["index"]);
    }

    $posts = Post::getAll();

    require "app/views/feed.php";
}
?>