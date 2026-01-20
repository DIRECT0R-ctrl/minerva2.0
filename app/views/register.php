<?php include 'header.php'; ?>

<h2>Inscription Étudiante</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Nom complet" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br><br>

    <button type="submit">S'inscrire</button>
</form>

<?php include 'footer.php'; ?>
