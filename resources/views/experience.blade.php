<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Expérience Professionnelle - {{ $name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .header {
            text-align: center;
            padding: 30px 0;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-in-out;
        }
        .header h1 {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .experience-section {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-in-out;
        }
        .experience-section h3 {
            color: #343a40;
            border-bottom: 2px solid #007bff;
            display: inline-block;
            margin-bottom: 15px;
            animation: fadeInLeft 1s ease-in-out;
        }
        .experience-item {
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-in-out;
        }
        .experience-item strong {
            color: #007bff;
        }
        .experience-item p {
            margin: 5px 0 0 0;
            color: #6c757d;
        }
        .experience-item i {
            color: #495057;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Header -->
        <div class="header animate__animated animate__fadeInDown">
            <h1>Mon Expérience Professionnelle</h1>
            <p>{{ $name }}</p>
        </div>

        <!-- Experience Section -->
        <div class="experience-section animate__animated animate__fadeInUp">
            <h3 class="animate__animated animate__fadeInLeft"><i class="bi bi-briefcase"></i> Expérience</h3>
            <div class="experience-item animate__animated animate__fadeInUp">
                <strong>Chargé d’exploitation SIG et Développeur - SONAGED SA :</strong> Depuis 2023 à aujourd'hui
                <p>
                    J'ai participé à des missions de traçage de circuits de collecte, de balayage et de localisation des points et dispositifs 
                    de la SONAGED SA dans les régions comme Dakar, Thiès et Ziguinchor.
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
