<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Musical Genres</title>
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
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .table-striped tbody tr:hover {
            background-color: #e9ecef;
        }
        .table th {
            background-color: #007bff;
            color: white;
            border-top: 2px solid #0056b3;
            border-bottom: 2px solid #0056b3;
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
    <h1>Musical Genres</h1>
    <a href="<?= site_url('genre/create') ?>" class="btn btn-primary mb-3">Add Genre</a>
    <a href="<?= site_url('home') ?>" class="btn btn-danger mb-3"><i class="bi bi-house-door"></i> Back to Home</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($genres as $genre): ?>
                <tr>
                    <td><?= $genre['id'] ?></td>
                    <td><?= $genre['name'] ?></td>
                    <td><?= $genre['description'] ?></td>
                    <td>
                        <a href="<?= site_url('genre/edit/' . $genre['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('genre/delete/' . $genre['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this genre?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <footer class="footer">
        <p>Technical University of Cotopaxi &copy; Developed by Brandon Paez & Bryan Sanchez</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
