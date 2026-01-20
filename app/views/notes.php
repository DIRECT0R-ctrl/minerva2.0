<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes Notes | Minerva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Mes Notes</h1>
    <a href="dashboard_student.php" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Retour</a>
</header>

<div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="bg-white p-4 rounded shadow">
        Travail 1 <span class="text-green-600 font-bold">15/20</span>
    </div>
    <div class="bg-white p-4 rounded shadow">
        Travail 2 <span class="text-red-600 font-bold">10/20</span>
    </div>
</div>

<footer class="text-center text-gray-500 text-sm mt-10">
    © <?= date('Y') ?> Minerva
</footer>
</body>
</html>
