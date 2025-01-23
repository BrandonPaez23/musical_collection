<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Audit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .form-control {
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
<div class="container mt-5">
    <h2 class="text-center">Create New Audit</h2>
    <form action="<?= site_url('audit/create') ?>" method="post">
        <div class="form-group mb-3">
            <label for="date_audit">Date</label>
            <input type="datetime-local" class="form-control" id="date_audit" name="date_audit" required>
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="user_audit">User</label>
            <input type="text" class="form-control" id="user_audit" name="user_audit" required>
        </div>
        <div class="form-group mb-3">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" required>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-circle"></i> Save
        </button>
        <a href="<?= site_url('audit') ?>" class="btn btn-danger">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </form>
</div>
    <footer class="footer">
        <p>Technical University of Cotopaxi &copy; Developed by Brandon Paez & Bryan Sanchez</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
