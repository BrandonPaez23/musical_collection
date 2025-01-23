<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musical Collection Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: radial-gradient(circle, #1e3c72, #2a5298, #1e3c72);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: #ffffff;
            color: #000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }
        .display-4 {
            color: #007bff;
            font-weight: bold;
        }
        .lead {
            color: #6c757d;
            font-size: 1.25rem;
        }
        .btn {
            font-size: 1.1rem;
            border-radius: 30px;
            padding: 15px 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn i {
            margin-right: 8px;
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
        .info-section {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            text-align: center;
        }
        .info-block {
            background: #ffffff;
            color: #000;
            border-radius: 10px;
            padding: 20px;
            flex: 1;
            margin: 0 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .info-block img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-4">Musical Collection Management</h1>
            <p class="lead">Welcome to the system for managing musical collections in museums.</p>
            <div class="mt-4">
                <a href="<?= site_url('composer') ?>" class="btn btn-primary btn-lg">
                    <i class="bi bi-person-fill"></i> Manage Composers
                </a>
                <a href="<?= site_url('genre') ?>" class="btn btn-secondary btn-lg">
                    <i class="bi bi-music-note-beamed"></i> Manage Genres
                </a>
                <a href="<?= site_url('musical_piece') ?>" class="btn btn-success btn-lg">
                    <i class="bi bi-file-earmark-music"></i> Manage Musical Pieces
                </a>
                <a href="<?= site_url('audit') ?>" class="btn btn-warning btn-lg">
                    <i class="bi bi-clipboard-data"></i> Manage Audits
                </a>
            </div>
        </div>
        <div class="info-section mt-5">
            <div class="info-block">
                <img src="https://festivalmorelia.mx/blog/wp-content/uploads/2024/05/Musical-Instrument-Museum.webp" alt="Musical Museum">
                <h5>Musical Museum</h5>
                <p>Explore the rich history and cultural significance of musical collections.</p>
            </div>
            <div class="info-block">
                <img src="https://www.unir.net/wp-content/uploads/2022/05/entrada-compositor.jpg" alt="Composer">
                <h5>Composer</h5>
                <p>Discover the lives and works of great composers from around the world.</p>
            </div>
            <div class="info-block">
                <img src="https://thehouserecords.com/wp-content/uploads/2022/03/Como-analizar-una-pieza-musical.webp" alt="Musical Piece">
                <h5>Musical Piece</h5>
                <p>Dive into the details of timeless musical masterpieces.</p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>Technical University of Cotopaxi &copy; Developed by Brandon Paez & Bryan Sanchez</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
