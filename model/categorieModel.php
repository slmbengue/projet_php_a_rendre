<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM categorie";
    return pg_query($connexion,$sql);
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM categorie WHERE id =$id";
   return pg_query($connexion,$sql);
}

function add($libelle){
    global $connexion;
    $sql ="INSERT INTO categorie (libelle) values
     ('$libelle')";
   return pg_query($connexion,$sql);
}

function updateCategorie($id,$libelle){
    global $connexion;
    $sql ="UPDATE categorie SET libelle='$libelle' where id=$id";
   return pg_query($connexion,$sql);
}

function getById($id){
    global $connexion;
    $sql ="SELECT * FROM categorie where id = $id";
    return pg_query($connexion,$sql);
}



?>


