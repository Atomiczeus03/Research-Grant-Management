<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Grant Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lexend Exa';
            background: linear-gradient(to bottom right, #1c1c2b, #2a2a4d);
            color: #f4f4f9;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.7);
        }

        .navbar a {
            color: rgb(0, 0, 0) !important;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #ff8c00 !important;
        }

        .welcome-section {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url('https://static.vecteezy.com/system/resources/previews/004/256/686/non_2x/abstract-dark-pink-gradient-geometric-background-modern-background-design-wave-liquid-shapes-composition-creative-templates-fit-for-presentation-design-website-basis-for-banners-wallpapers-free-vector.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        .welcome-section h1 {
            font-size: 3.0rem;
            margin-bottom: 20px;
        }

        .welcome-section p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .btn-custom {
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s;
            background: linear-gradient(135deg, #4CAF50, #2E7D32);
            color: white;
            text-decoration: none;
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #2E7D32, #4CAF50);
            box-shadow: 0px 4px 15px rgba(0, 255, 0, 0.4);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Research Grant System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <h1>Welcome to the Research Grant Management System</h1>
        <p>Your one-stop solution for managing research grants effectively and efficiently.</p>
        <a href="{{ url('/dashboard') }}" class="btn btn-custom">Get Started</a>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>