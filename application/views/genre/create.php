<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Musical Genre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h2 class="my-4">Create New Musical Genre</h2>

        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

        <?php echo form_open('genre/create'); ?>
        
        <div class="mb-3">
            <label for="name" class="form-label">Genre Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo set_value('description'); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Genre</button>
        <a href="<?php echo site_url('genre'); ?>" class="btn btn-secondary">Cancel</a>
        
        <?php echo form_close(); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
