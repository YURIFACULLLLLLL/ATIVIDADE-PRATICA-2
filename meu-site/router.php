<?php
session_start();

$page = $_GET["page"] ?? "login";

switch ($page) {
    case "login":
        require "app/controllers/AuthController.php";
        login();
        break;

    case "cadastro":
        require "app/controllers/AuthController.php";
        cadastro();
        break;

    case "feed":
        require "app/controllers/FeedController.php";
        feed();
        break;
}
?>