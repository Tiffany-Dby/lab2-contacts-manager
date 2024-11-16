<?php
require_once __DIR__ . '/db.php';
function addContact($name, $email, $phone): false|string
{
    $pdo = connectDB();

    try {
        $PDOstmt = $pdo->prepare("INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)");
        $PDOstmt->bindParam(':name', $name);
        $PDOstmt->bindParam(':email', $email);
        $PDOstmt->bindParam(':phone', $phone);

        $PDOstmt->execute();

        return $pdo->lastInsertId();
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
        return false;
    }
}

function getContacts(): false|array
{
    $pdo = connectDB();

    try {
        $PDOstmt = $pdo->prepare("SELECT id, name, email, phone FROM contacts");
        $PDOstmt->execute();

        return $PDOstmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
        return false;
    }
}

function getContact($id) {
    $pdo = connectDB();

    try {
        $PDOstmt = $pdo->prepare("SELECT id, name, email, phone FROM contacts WHERE id = :id");
        $PDOstmt->bindParam(':id', $id, PDO::PARAM_INT);
        $PDOstmt->execute();

        return $PDOstmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        return false;
    }
}

function updateContact($id, $name, $email, $phone): void
{
    $pdo = connectDB();

    try {
        $PDOstmt = $pdo->prepare("UPDATE contacts SET name = :name, email = :email, phone = :phone WHERE id = :id");
        $PDOstmt->bindParam(':id', $id);
        $PDOstmt->bindParam(':name', $name);
        $PDOstmt->bindParam(':email', $email);
        $PDOstmt->bindParam(':phone', $phone);

        $PDOstmt->execute();
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
}
function deleteContact($id): void
{
    $pdo = connectDB();

    try {
        $PDOstmt = $pdo->prepare("DELETE FROM contacts WHERE id = :id");
        $PDOstmt->bindParam(':id', $id);
        $PDOstmt->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}