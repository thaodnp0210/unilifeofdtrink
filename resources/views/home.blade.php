<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Life of Diem Trinh</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .hero {
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 30px;
        }
        .card {
            border: none;
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        footer {
            background: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Diem Trinh</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Activities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>University Life of Diem Trinh</h1>
            <p>Sharing memories, experiences and journeys at university ✨</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="section-title">About Me</h2>
            <p>
                Hi, I'm Diem Trinh. This website is where I share my university life,
                from studying, friendships to unforgettable memories.
            </p>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">University Activities</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <h5>📚 Studying</h5>
                        <p>Daily lessons, assignments, and learning experiences.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <h5>🎉 Events</h5>
                        <p>Participating in school events and extracurricular activities.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <h5>👯 Friends</h5>
                        <p>Moments with friends that make university life unforgettable.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="section-title">Gallery</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/300" class="img-fluid rounded">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/300" class="img-fluid rounded">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/300" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 Diem Trinh | University Life</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>