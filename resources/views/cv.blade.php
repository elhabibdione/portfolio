<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Curriculum Vitae - {{ $name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .cv-header {
            text-align: center;
            padding: 30px 0;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-in-out;
        }
        .cv-header h1 {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .cv-header p {
            font-size: 1.2rem;
            margin: 0;
        }
        .section-title {
            color: #343a40;
            border-bottom: 2px solid #007bff;
            display: inline-block;
            margin-bottom: 15px;
            padding-bottom: 5px;
            animation: fadeInLeft 1s ease-in-out;
        }
        .timeline {
            list-style: none;
            padding: 0;
        }
        .timeline li {
            margin-bottom: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease-in-out;
        }
        .timeline li strong {
            color: #007bff;
        }
        .timeline li em {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Header -->
        <div class="cv-header animate__animated animate__fadeInDown">
            <h1>Mon Curriculum Vitae</h1>
            <p>{{ $name }}</p>
        </div>

        <!-- Formation Section -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title animate__animated animate__fadeInLeft">
                    <i class="bi bi-book"></i> Formation
                </h3>
                <ul class="timeline">
                    <li class="animate__animated animate__fadeInUp">
                        <strong>Octobre 2021 - Décembre 2024 :</strong> Licence en Géomatique et Développement d'Application <em>ISI (Institut Supérieur d'Informatique de Dakar)</em>
                    </li>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                        <strong>Janvier 2021 - Mai 2024 :</strong> Licence 3 Histoire et Géographie, <em>UCAD (Université Cheikh Anta Diop de Dakar)</em>
                    </li>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                        <strong>Novembre 2019 - Août 2020 :</strong> Baccalauréat série L2, <em>Lycée de Diass</em>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
