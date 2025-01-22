<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Musical Piece</title>
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
    </style>
</head>
<body>
<div class="container mt-4">
    <h1>Create Musical Piece</h1>
    <form action="<?= site_url('musical_piece/store') ?>" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="era" class="form-label">Era</label>
            <input type="text" class="form-control" id="era" name="era" required>
        </div>
        <div class="mb-3">
            <label for="creation_date" class="form-label">Creation Date</label>
            <input type="date" class="form-control" id="creation_date" name="creation_date" required>
        </div>
        <div class="mb-3">
            <label for="composer_id" class="form-label">Composer</label>
            <select class="form-select" id="composer_id" name="composer_id" required>
                <option value="">Select a Composer</option>
                <?php foreach ($composers as $composer): ?>
                    <option value="<?= $composer['id'] ?>"><?= $composer['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="genre_id" class="form-label">Genre</label>
            <select class="form-select" id="genre_id" name="genre_id" required>
                <option value="">Select a Genre</option>
                <?php foreach ($genres as $genre): ?>
                    <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="<?= site_url('musical_piece') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
