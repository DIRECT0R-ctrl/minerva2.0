<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Chat de Classe | Minerva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Chat de Classe</h1>
    <a href="dashboard_student.php" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Retour</a>
</header>

<div class="flex-1 p-6 overflow-y-auto space-y-4">
    <div class="bg-white p-3 rounded shadow max-w-xs">Bonjour, je suis étudiant 1</div>
    <div class="bg-blue-100 p-3 rounded shadow max-w-xs ml-auto">Bonjour, enseignant</div>
</div>

<form class="p-4 bg-white flex gap-2 shadow">
    <input type="text" placeholder="Écrire un message..." class="flex-1 border border-gray-300 rounded px-3 py-2">
    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Envoyer</button>
</form>

<footer class="text-center text-gray-500 text-sm mt-4">
    © <?= date('Y') ?> Minerva
</footer>

</body>
</html>
