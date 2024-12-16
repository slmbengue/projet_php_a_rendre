<?php

$controller = $_GET["controller"] ?? null;

// Chargement du bon contrôleur
if ($controller === 'produit') {
    require_once './controller/produitController.php';
} elseif ($controller === 'categorie') {
    require_once './controller/categorieController.php';
} elseif ($controller === './controller/UserController.php') {    
} else {
    die('Contrôleur non valide.');
}

// Vérification de l'action
$action = $_GET['action'] ?? null;

if (!empty($action)) {
    switch ($action) {
        case 'add':
            pageAdd();
            break;
        case 'delete':
            remove();
            break;
        case 'save':
            save();
            break;
        case 'edit':
            if ($controller === 'categorie') {
                getCategorie();
            } elseif ($controller === 'produit') {
                getProduit();
            } else {
                die('Action non valide pour ce contrôleur.');
            }
            break;
        case 'update':
            if ($controller === 'produit') {
                getProduit();
            } else {
                update();
            }
            break;
        default:
            die('Action non reconnue.');
    }
} else {
    index();
}
