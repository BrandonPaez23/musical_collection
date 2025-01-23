<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Genre</title>
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
<div class="container mt-4">
    <h1>Edit Musical Genre</h1>

    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

    <?php echo form_open('genre/edit/' . $genre['id']); ?>
    
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name', $genre['name']); ?>" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required><?= set_value('description', $genre['description']); ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save Changes</button>
    <a href="<?= site_url('genre'); ?>" class="btn btn-secondary">Cancel</a>

    <?php echo form_close(); ?>
</div>
    <footer class="footer">
        <p>Technical University of Cotopaxi &copy; Developed by Brandon Paez & Bryan Sanchez</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
