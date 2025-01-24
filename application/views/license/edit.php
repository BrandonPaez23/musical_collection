<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit License</title>
</head>
<body>
    <h1>Edit License</h1>
    <form action="<?= site_url('license/edit/' . $license['id']) ?>" method="post">
        <label>Type:</label>
        <select name="type" required>
            <option value="Premium" <?= $license['type'] == 'Premium' ? 'selected' : '' ?>>Premium</option>
            <option value="OpenSource" <?= $license['type'] == 'OpenSource' ? 'selected' : '' ?>>OpenSource</option>
        </select><br>

        <label>Cost:</label>
        <input type="number" step="0.01" name="cost" value="<?= $license['cost'] ?>" required><br>

        <label>Acronym:</label>
        <input type="text" name="acronym" maxlength="10" value="<?= $license['acronym'] ?>" required><br>

        <label>Status:</label>
        <select name="status" required>
            <option value="MIT" <?= $license['status'] == 'MIT' ? 'selected' : '' ?>>MIT</option>
            <option value="BSD" <?= $license['status'] == 'BSD' ? 'selected' : '' ?>>BSD</option>
            <option value="ACTIVE" <?= $license['status'] == 'ACTIVE' ? 'selected' : '' ?>>ACTIVE</option>
        </select><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
