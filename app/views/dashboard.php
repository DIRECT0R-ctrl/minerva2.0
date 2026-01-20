<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'student') {
   header('Location: login.php');
   exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Étudiante | Minerva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- HEADER -->
<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold"> Minerva – Espace Étudiante</h1>
    <a href="logout.php" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">
        Déconnexion
    </a>
</header>

<div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white h-screen shadow-md">
        <nav class="p-4 space-y-4">
            <a href="#profil" class="block text-gray-700 hover:text-blue-600 font-medium">Mon profil</a>
            <a href="#travaux" class="block text-gray-700 hover:text-blue-600 font-medium"> Mes travaux</a>
            <a href="#notes" class="block text-gray-700 hover:text-blue-600 font-medium"> Mes notes</a>
            <a href="#chat" class="block text-gray-700 hover:text-blue-600 font-medium"> Chat de classe</a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-6 space-y-6">

        <!-- PROFIL -->
        <section id="profil" class="bg-white rounded shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Mon profil</h2>
            <p><strong>Nom :</strong> Sarra Abbih</p>
            <p><strong>Email :</strong> sarra@email.com</p>
            <p><strong>Classe :</strong>develomppent web  </p>
        </section>

        <!-- TRAVAUX -->
        <section id="travaux" class="bg-white rounded shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Mes travaux</h2>
            <table class="w-full border">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-2 border">Titre</th>
                        <th class="p-2 border">Date limite</th>
                        <th class="p-2 border">Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="p-2 border">Projet MVC PHP</td>
                        <td class="p-2 border">25/01/2026</td>
                        <td class="p-2 border text-red-500">Non soumis</td>
                    </tr>
                    <tr class="text-center">
                        <td class="p-2 border">Exercice UML</td>
                        <td class="p-2 border">18/01/2026</td>
                        <td class="p-2 border text-green-600">Soumis</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- NOTES -->
        <section id="notes" class="bg-white rounded shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Mes notes</h2>
            <table class="w-full border">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-2 border">Travail</th>
                        <th class="p-2 border">Note</th>
                        <th class="p-2 border">Commentaire</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="p-2 border">Exercice UML</td>
                        <td class="p-2 border font-bold">15 / 20</td>
                        <td class="p-2 border">Bon travail</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- CHAT -->
        <section id="chat" class="bg-white rounded shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Chat de classe</h2>

            <div class="border h-40 p-3 mb-4 overflow-y-scroll bg-gray-50">
                <p><strong>Prof :</strong> Bonjour à tous</p>
                <p><strong>Sara :</strong> Bonjour monsieur</p>
            </div>

            <form class="flex gap-2">
                <input type="text" placeholder="Votre message..."
                       class="flex-1 border rounded px-3 py-2">
                <button class="bg-blue-600 text-white px-4 rounded hover:bg-blue-700">
                    Envoyer
                </button>
            </form>
        </section>

    </main>
</div>

</body>
</html>
