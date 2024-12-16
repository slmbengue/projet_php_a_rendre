<?php
require_once './model/db.php'; // Connexion à la base de données

function getAlluser() {
    global $connexion;
    $query = "SELECT * FROM user";
    return pg_query($connexion, $query);
}

function getUserById($id) {
    global $connexion;
    $id = (int) $id; // Sécurisation de l'ID
    $query = "SELECT * FROM user WHERE id = $id";
    return pg_fetch_assoc(pg_query($connexion, $query));
}

function addUser($name, $email, $password) {
    global $connexion;
    $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hash du mot de passe
    $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$passwordHash')";
    return pg_query($connexion, $query);
}

function updateUser($id, $name, $email, $password) {
    global $connexion;
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE user SET name = '$name', email = '$email', password = '$passwordHash' WHERE id = $id";
    return pg_query($connexion, $query);
}

function deleteUser($id) {
    global $connexion;
    $id = (int) $id;
    $query = "DELETE FROM user WHERE id = $id";
    return pg_query($connexion, $query);
}
?>
