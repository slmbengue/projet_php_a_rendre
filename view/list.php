
<a href="?action=add">ADD PRODUCT</a>
<table>
    <tr>
        <th>ID</th>
        <th>Libelle</th>
        <th>Quantite</th>
        <th>Prix Unitaire</th>
    </tr>
    <?php while( $p = pg_fetch_assoc($produits)){ ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['libelle'] ?></td>
            <td><?= $p['qt'] ?></td>
            <td><?= $p['pu'] ?></td>
            <td>
                <a href="?action=delete&id=<?= $p['id'] ?>">Delete</a>
                <buttona>Update</buttona>
            </td>
        </tr>
    <?php } ?>    
</table>