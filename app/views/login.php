
<header class="bg-blue-600 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold"> Minerva – Espace Étudiante</h1>
    <a href="logout.php" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">
        Déconnexion
    </a>
</header>
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">
            Connexion
        </h2>

        <form method="POST" class="space-y-4">

            <div>
                <label class="block text-gray-700 font-medium mb-1">
                    Email
                </label>
                <input type="email" name="email" required
                       class="w-full border border-gray-300 rounded px-3 py-2
                              focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">
                    Mot de passe
                </label>
                <input type="password" name="password" required
                       class="w-full border border-gray-300 rounded px-3 py-2
                              focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded
                           hover:bg-blue-700 transition">
                Se connecter
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-4">
            Pas encore de compte ?
            <a href="register.php" class="text-blue-600 hover:underline">
                S'inscrire
            </a>
        </p>

    </div>
</div>

<?php include 'footer.php'; ?>
