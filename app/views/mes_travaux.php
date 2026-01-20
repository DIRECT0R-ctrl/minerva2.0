<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes Travaux | Minerva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Mes Travaux</h1>
    <a href="dashboard_student.php" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Retour</a>
</header>

<div class="p-6 space-y-4">
    <div class="bg-white p-4 rounded shadow">Travail 1 - <span class="text-gray-500">Non soumis</span></div>
    <div class="bg-white p-4 rounded shadow">Travail 2 - <span class="text-green-500">Soumis</span></div>
</div>

<footer class="text-center text-gray-500 text-sm mt-10">
    © <?= date('Y') ?> Minerva
</footer>
</body>
</html>
