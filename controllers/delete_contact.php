<?php
require_once __DIR__ . '/../functions/contact.php';

$deleteId = "";

if(isset($_GET["deleteId"]) && is_numeric($_GET["deleteId"])){
    $deleteId = $_GET["deleteId"];
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteContact"])){
    $deleteId = (int) $_POST["deleteId"];

    deleteContact($deleteId);

    header("Location: /lab2-contacts-manager/index.php");
    exit();
}