<form action="?controller=produit&action=update" method="POST">
    <input type="text" name="id" value=<?= $produit['id']?> hidden><br>
    <label for="">Libelle</label>
    <input type="text" name="libelle" value=<?= $produit['libelle']?>><br>
    <label for="">quantite</label>
    <input type="text" name="quantite" value=<?= $produit['qt']?>><br>
    <label for="">Prix</label>
    <input type="text" name="prix" value=<?= $produit['pu']?>><br>
   

    <button type="submit">Update</button>

</form>