<?php
function connectDB() {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'contacts_db';

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
}