<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Compétences</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .header-container {
            text-align: center;
            margin-bottom: 40px;
            animation: fadeInDown 1s ease;
        }
        .header-container h1 {
            font-weight: bold;
            color: #343a40;
        }
        .header-container p {
            font-size: 1.2rem;
            color: #6c757d;
        }
        .skill-section {
            margin-bottom: 40px;
        }
        .skill-section h3 {
            color: #495057;
            font-weight: bold;
            margin-bottom: 20px;
            animation: fadeInLeft 1.5s ease;
        }
        .skill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            list-style: none;
            padding: 0;
        }
        .skill-item {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            width: calc(50% - 10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: zoomIn 1s ease;
        }
        .skill-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        .skill-item i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
            animation: pulse 2s infinite;
        }

        /* Custom Keyframes */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <div class="header-container">
            <h1>Mes Compétences</h1>
            <p>Découvrez mes compétences en développement web et géomatique</p>
        </div>

        <!-- Section Développement Web -->
        <div class="skill-section">
            <h3>Compétences en Développement Web et Mobile</h3>
            <ul class="skill-list">
                <li class="skill-item">
                    <i class="bi bi-code-slash"></i>
                    <p>Laravel</p>
                </li>
                <li class="skill-item">
                    <i class="bi bi-code-slash"></i>
                    <p>Angular</p>
                </li>
                <li class="skill-item">
                    <i class="bi bi-phone"></i>
                    <p>Flutter</p>
                </li>
                <li class="skill-item">
                    <i class="bi bi-gear"></i>
                    <p>VBA</p>
                </li>
                <li class="skill-item">
                    <i class="bi bi-braces"></i>
                    <p>HTML, CSS, JavaScript</p>
                </li>
            </ul>
        </div>

        <!-- Section Géomatique -->
        <div class="skill-section">
            <h3>Compétences en Géomatique</h3>
            <ul class="skill-list">
                <li class="skill-item">
                    <i class="bi bi-map"></i>
                    <p>Confection de cartes</p>
                </li>
                <li class="skill-item">
                    <i class="bi bi-diagram-3"></i>
                    <p>Mise en place d'un SIG et analyses</p>
                </li>
                <li class="skill-item">
                    <i class="bi bi-geo-alt"></i>
                    <p>Collecte de données GPS</p>
                </li>
                <li class="skill-item">
                    <i class="bi bi-database"></i>
                    <p>Traitement de données</p>
                </li>
            </ul>
        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
