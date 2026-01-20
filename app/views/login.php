<?php include 'header.php'; ?>

<h2>Connexion</h2>

<form method="POST">
    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mot de passe</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Se connecter</button>
</form>

<p>Pas encore de compte ? <a href="register.php">S'inscrire</a></p>

<?php include 'footer.php'; ?>
