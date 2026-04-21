<?php

function login() {
    $erro = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["email"] == "teste@email.com" && $_POST["senha"] == "123456") {
            $_SESSION["usuario"] = "Yuri";
            header("Location: ?page=feed");
            exit();
        } else {
            $erro = "Login inválido";
        }
    }

    require "app/views/login.php";
}

function cadastro() {
    $erro = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["senha"] != $_POST["confirmar"]) {
            $erro = "Senhas não coincidem";
        } else {
            header("Location: ?page=login");
            exit();
        }
    }

    require "app/views/cadastro.php";
}
?>