<?php

class Post {

    public static function getAll() {
        return $_SESSION["posts"] ?? [];
    }

    public static function create($texto, $usuario) {
        $_SESSION["posts"][] = [
            "usuario" => $usuario,
            "texto" => $texto,
            "curtidas" => 0,
            "curtido" => false
        ];
    }

    public static function like($index) {
        if (!$_SESSION["posts"][$index]["curtido"]) {
            $_SESSION["posts"][$index]["curtidas"]++;
            $_SESSION["posts"][$index]["curtido"] = true;
        }
    }
}
?>