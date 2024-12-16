<h1>Modifier un utilisateur</h1>
<form action="?controller=user&action=update" method="POST">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <label>Nom :</label>
    <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
    <label>Email :</label>
    <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
    <label>Mot de passe :</label>
    <input type="password" name="password" placeholder="Laisser vide pour ne pas changer"><br>
    <button type="submit">Modifier</button>
</form>
