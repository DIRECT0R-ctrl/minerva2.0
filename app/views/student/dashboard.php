<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Étudiant | Minerva</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
  <h1 class="text-xl font-bold">Minerva – Espace Étudiant</h1>
  <a href="/logout" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">Déconnexion</a>
</header>

<div class="p-6">
  <p class="mb-6 text-gray-700">Bienvenue, <strong><?= htmlspecialchars($fullname ?? '') ?></strong></p>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <a href="#" class="bg-white shadow rounded-lg p-5 hover:shadow-lg transition">Mes Travaux</a>
    <a href="#" class="bg-white shadow rounded-lg p-5 hover:shadow-lg transition">Mes Notes</a>
    <a href="#" class="bg-white shadow rounded-lg p-5 hover:shadow-lg transition">Chat de Classe</a>
  </div>
</div>

<footer class="text-center text-gray-500 text-sm mt-10">
  © <?= date('Y') ?> Minerva
</footer>
</body>
</html>
