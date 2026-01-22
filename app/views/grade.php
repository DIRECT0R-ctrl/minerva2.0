<h2>Évaluer un travail</h2>

<form method="POST">
    <input type="hidden" name="submission_id" value="<?= $_GET['id'] ?>">

    <label>Note</label>
    <input type="number" step="0.5" name="grade" required>

    <label>Commentaire</label>
    <textarea name="comment"></textarea>

    <button type="submit">Valider</button>
</form>
