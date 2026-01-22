<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Enseignant | Minerva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Minerva – Espace Enseignant</h1>
    <a href="logout.php" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">Déconnexion</a>
</header>

<div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <a href="mes_travaux.php" class="bg-white shadow rounded-lg p-5 hover:shadow-lg transition">Créer / Assigner Travaux</a>
    <a href="notes.php" class="bg-white shadow rounded-lg p-5 hover:shadow-lg transition">Évaluer les Travaux</a>
    <a href="chat_class.php" class="bg-white shadow rounded-lg p-5 hover:shadow-lg transition">Chat de Classe</a>
</div>

<footer class="text-center text-gray-500 text-sm mt-10">
    © <?= date('Y') ?> Minerva – Plateforme éducative
</footer>
</body>
</html>
