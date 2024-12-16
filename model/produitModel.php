<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM produit";
    $result = pg_query($connexion,$sql);
    if (!$result) {
        die("Erreur dans la requête SQL : " . pg_last_error($connexion));
    }
    return $result;
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM produit WHERE id =$id";
   return pg_query($connexion,$sql);
}

function add($libelle,$quantite,$prix){
    global $connexion;
    $sql ="INSERT INTO produit (libelle,qt,pu,idcat) values
     ('$libelle',$quantite,$prix,1)";
   return pg_query($connexion,$sql);
}



function updateProduit($id,$libelle,$quantite,$prix){
    global $connexion;
    $sql ="UPDATE produit SET libelle='$libelle',qt=$quantite,pu=$prix
    where id=$id";
   return pg_query($connexion,$sql);
}


function getById($id){
    global $connexion;
    $sql ="SELECT * FROM produit where id = $id";
    return pg_query($connexion,$sql);
}



?>


