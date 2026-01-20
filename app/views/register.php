<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold"> Minerva – Espace Étudiante</h1>
    <a href="logout.php" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">
        Déconnexion
    </a>
</header>

<h2>Inscription Étudiante</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Nom complet" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br><br>

    <button type="submit">S'inscrire</button>
</form>

<?php include 'footer.php'; ?>
