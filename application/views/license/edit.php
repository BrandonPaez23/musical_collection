<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit License</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h1 {
            color: #007bff;
            font-size: 2.5rem;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control, .form-select {
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .mb-3 {
            margin-bottom: 1.5rem;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            transition: background-color 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .footer {
            margin-top: 30px;
            padding: 20px;
            background: #2a5298;
            color: #ffffff;
            text-align: center;
        }
        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
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
    <footer class="footer">
        <p>Technical University of Cotopaxi &copy; Developed by Brandon Paez & Bryan Sanchez</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
