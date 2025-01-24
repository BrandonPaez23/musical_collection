<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit License</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #007bff;
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        .form-control, .form-select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            margin-bottom: 15px;
        }
        .form-control:focus, .form-select:focus {
            outline: none;
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #ffffff;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .footer {
            margin-top: 30px;
            padding: 15px;
            background: #2a5298;
            color: #ffffff;
            text-align: center;
            border-radius: 5px;
        }
        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit License</h1>
        <form action="<?= site_url('license/edit/' . $license['id']) ?>" method="post">
            <label for="type" class="form-label">Type:</label>
            <select name="type" id="type" class="form-select" required>
                <option value="Premium" <?= $license['type'] == 'Premium' ? 'selected' : '' ?>>Premium</option>
                <option value="OpenSource" <?= $license['type'] == 'OpenSource' ? 'selected' : '' ?>>OpenSource</option>
            </select>

            <label for="cost" class="form-label">Cost:</label>
            <input type="number" step="0.01" name="cost" id="cost" value="<?= $license['cost'] ?>" class="form-control" required>

            <label for="acronym" class="form-label">Acronym:</label>
            <input type="text" name="acronym" id="acronym" maxlength="10" value="<?= $license['acronym'] ?>" class="form-control" required>

            <label for="status" class="form-label">Status:</label>
            <select name="status" id="status" class="form-select" required>
                <option value="MIT" <?= $license['status'] == 'MIT' ? 'selected' : '' ?>>MIT</option>
                <option value="BSD" <?= $license['status'] == 'BSD' ? 'selected' : '' ?>>BSD</option>
                <option value="ACTIVE" <?= $license['status'] == 'ACTIVE' ? 'selected' : '' ?>>ACTIVE</option>
            </select>

            <button type="submit" class="btn-primary">Update</button>
        </form>
    </div>
    <footer class="footer">
        <p>Technical University of Cotopaxi &copy; Developed by Brandon Paez & Bryan Sanchez</p>
    </footer>
</body>
</html>
