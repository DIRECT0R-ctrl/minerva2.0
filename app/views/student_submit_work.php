<form method="POST">
    <input type="hidden" name="work_id" value="<?= $work['id'] ?>">

    <textarea name="content" class="w-full border p-2" required></textarea>

    <button class="bg-blue-600 text-white px-4 py-2 mt-2">
        Envoyer
    </button>
</form>
