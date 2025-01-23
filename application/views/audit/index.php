<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit List</title>
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
<div class="container mt-5">
    <h2 class="text-center">Audit Management</h2>
    <a href="<?= site_url('audit/create') ?>" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Create New Audit
    </a>
    <a href="<?= site_url('home') ?>" class="btn btn-danger mb-3"><i class="bi bi-house-door"></i> Back to Home</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Description</th>
                <th>User</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($audits)): ?>
                <?php foreach ($audits as $audit): ?>
                    <tr>
                        <td><?= $audit['id'] ?></td>
                        <td><?= $audit['date_audit'] ?></td>
                        <td><?= $audit['description'] ?></td>
                        <td><?= $audit['user_audit'] ?></td>
                        <td><?= $audit['gender'] ?></td>
                        <td>
                            <a href="<?= site_url('audit/edit/' . $audit['id']) ?>" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <a href="<?= site_url('audit/delete/' . $audit['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this audit?')">
                                <i class="bi bi-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No audits found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
    <footer class="footer">
        <p>Technical University of Cotopaxi &copy; Developed by Brandon Paez & Bryan Sanchez</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
