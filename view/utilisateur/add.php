<h1>Ajouter un utilisateur</h1>
<form action="?controller=user&&action=save" method="POST">
    <label>Nom :</label>
    <input type="text" name="name" required><br>
    <label>Email :</label>
    <input type="email" name="email" required><br>
    <label>Mot de passe :</label>
    <input type="password" name="password" required><br>
    <button type="submit">Ajouter</button>
</form>
