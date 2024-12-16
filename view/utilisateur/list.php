<h1>Liste des utilisateurs</h1>
<a href="?controller=user&&action=add">Ajouter un utilisateur</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php while ($user = pg_fetch_assoc($users)) { ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="?controller=user&action=edit&id=<?= $user['id'] ?>">Modifier</a>
                <a href="?controller=user&action=delete&id=<?= $user['id'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php } ?>
</table>
