<h2>Prise de présence</h2>

<form method="POST">
    <input type="hidden" name="class_id" value="<?= $classId ?>">

    <table border="1">
        <tr>
            <th>Étudiant</th>
            <th>Présence</th>
        </tr>

        <?php foreach ($students as $s): ?>
        <tr>
            <td><?= htmlspecialchars($s['fullname']) ?></td>
            <td>
                <select name="students[<?= $s['id'] ?>]">
                    <option value="present">Présent</option>
                    <option value="absent">Absent</option>
                </select>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <button type="submit">Enregistrer</button>
</form>
