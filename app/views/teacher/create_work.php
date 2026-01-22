<form method="POST" class="space-y-4">
    <input type="text" name="title" placeholder="Titre du travail"
           class="w-full border p-2 rounded" required>

    <textarea name="description" placeholder="Description"
              class="w-full border p-2 rounded"></textarea>

    <select name="class_id" class="w-full border p-2 rounded">
        <!-- classes du prof -->
    </select>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Créer le travail
    </button>
</form>
