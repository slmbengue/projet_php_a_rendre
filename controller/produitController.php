<?php
    require_once('./model/produitModel.php');
    $produits = getAll();
    function index(){
       $produits = getAll();
       require_once './view/produit/list.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=produit');
    }

    function pageAdd(){
        require_once './view/produit/add.php';
    }

    function save(){
        var_dump($_POST);
        $libelle = $_POST['libelle'] ?? '';
        $qt = $_POST['quantite'] ?? 0;
        $pu = $_POST['prix'] ?? 0;
    
        if (empty($libelle) || $qt <= 0 || $pu <= 0) {
            die("Données invalides !");
        }
    
        if (!add($libelle, $qt, $pu)) {
            die("Erreur lors de l'insertion du produit !");
        }
    
        header('location:index.php?controller=produit');
    }
    
    function getProduit(){
        var_dump($_GET);
        $id = $_GET['id'];
        $produit = pg_fetch_assoc(getById($id)); 
        require_once './view/produit/edit.php';
        die();
    }
    

    function update(){
        var_dump($_POST);
        if(!isset($_POST['id']) || !isset($_POST['libelle']) || !isset($_POST['qt']) || !isset($_POST['pu'])) {
            header('location:index.php?controller=produit&error=donnéesManquantes');
            exit();
        }
        
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $quantite = $_POST['qt'];
        $prix = $_POST['pu'];
        updateProduit($id,$libelle,$quantite,$prix);
        header('location:index.php?controller=produit');
    }



?>