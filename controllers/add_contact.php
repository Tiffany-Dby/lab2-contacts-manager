<?php
require_once __DIR__ . '/../functions/contact.php';

$name = $email = $phone = "";

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["addContact"])){
    $name = htmlspecialchars($_POST["name"]) ?? "";
    $email = htmlspecialchars($_POST["email"]) ?? "";
    $phone = htmlspecialchars($_POST["phone"]) ?? "";

    if(empty($name) || empty($email) || empty($phone)){
        echo "Veuillez renseigner tous les champs";
        return;
    }

    $newContactId = addContact($name, $email, $phone);
    if($newContactId){
        echo "Contact ajouté avec succès !";
    }
    else {
        echo "Erreur lors de l'ajout du contact";
    }

    header("Location: /lab2-contacts-manager/index.php");
    exit();
}