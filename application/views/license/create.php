<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Musical Genre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Create License</title>
</head>
<body>
    <h1>Create a New License</h1>
    <form action="<?= site_url('license/create') ?>" method="post">
        <label>Type:</label>
        <select name="type" required>
            <option value="Premium">Premium</option>
            <option value="OpenSource">OpenSource</option>
        </select><br>

        <label>Cost:</label>
        <input type="number" step="0.01" name="cost" required><br>

        <label>Acronym:</label>
        <input type="text" name="acronym" maxlength="10" required><br>

        <label>Status:</label>
        <select name="status" required>
            <option value="MIT">MIT</option>
            <option value="BSD">BSD</option>
            <option value="ACTIVE">ACTIVE</option>
        </select><br>

        <button type="submit">Save</button>
    </form>
</body>
    <footer class="footer">
        <p>Technical University of Cotopaxi &copy; Developed by Brandon Paez & Bryan Sanchez</p>
    </footer>
</html>

