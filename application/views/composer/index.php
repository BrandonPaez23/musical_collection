<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Composers</title>
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
        .btn {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .table thead {
            background-color: #007bff;
            color: #ffffff;
        }
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            transition: background-color 0.3s ease;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            transition: background-color 0.3s ease;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
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
<div class="container mt-4">
    <h1>Composers</h1>
    <a href="<?= site_url('composer/create') ?>" class="btn btn-primary mb-3">Add Composer</a>
    <a href="<?= site_url('home') ?>" class="btn btn-danger mb-3"><i class="bi bi-house-door"></i> Back to Home</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Nationality</th>
                <th>Birth Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($composers as $composer): ?>
                <tr>
                    <td><?= $composer['id'] ?></td>
                    <td><?= $composer['name'] ?></td>
                    <td><?= $composer['nationality'] ?></td>
                    <td><?= $composer['birth_date'] ?></td>
                    <td>
                        <a href="<?= site_url('composer/edit/'.$composer['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('composer/delete/'.$composer['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this composer?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>