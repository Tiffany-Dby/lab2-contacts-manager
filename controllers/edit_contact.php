<?php
require_once __DIR__ . '/../functions/contact.php';

$editId = $editName = $editEmail = $editPhone = "";

if(isset($_GET["editId"]) && is_numeric($_GET["editId"])){
    $editId = $_GET["editId"];

    $contact = getContact($editId);

    if(!$contact){
        echo "Contact not found";
        exit();
    }

    $editName = htmlspecialchars($contact["name"]);
    $editEmail = htmlspecialchars($contact["email"]);
    $editPhone = htmlspecialchars($contact["phone"]);

    require_once __DIR__ . '/../views/forms/edit_contact_form.php';
}

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["editContact"])){
    $editId = htmlspecialchars($_POST["editId"]);
    $editName = htmlspecialchars($_POST["editName"]) ?? "";
    $editEmail = htmlspecialchars($_POST["editEmail"]) ?? "";
    $editPhone = htmlspecialchars($_POST["editPhone"]) ?? "";

    if(empty($editName) || empty($editEmail) || empty($editPhone)){
        echo "Veuillez renseigner tous les champs";
        return;
    }

    updateContact($editId, $editName, $editEmail, $editPhone);

    header("Location: /lab2-contacts-manager/index.php");
    exit();
}