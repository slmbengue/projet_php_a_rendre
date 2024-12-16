<?php
require_once './model/userModel.php';

function userIndex() {
    $users = getAllUser();
    require './view/user/list.php';
}

function userAddPage() {
    require './view/user/add.php';
}

function userAdd() {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['motdepasse'];

    // Validation des données
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email invalide !");
    }

    if (strlen($password) < 6) {
        die("Le mot de passe doit comporter au moins 6 caractères !");
    }

    if (!addUser($name, $email, $password)) {
        die("Erreur lors de l'ajout de l'utilisateur !");
    }

    header('Location: index.php?controller=user');
}

function userEditPage() {
    $id = $_GET['id'];
    $user = getUserById($id);
    require './view/user/edit.php';
}

function userUpdate() {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation des données
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email invalide !");
    }

    if (!updateUser($id, $name, $email, $password)) {
        die("Erreur lors de la mise à jour de l'utilisateur !");
    }

    header('Location: index.php?controller=user');
}

function userDelete() {
    $id = $_GET['id'];
    if (!deleteUser($id)) {
        die("Erreur lors de la suppression de l'utilisateur !");
    }
    header('Location: index.php?controller=user');
}
?>
