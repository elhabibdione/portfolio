<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-moi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .contact-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
        }
        .contact-header {
            margin-bottom: 20px;
            text-align: center;
        }
        .contact-info p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .contact-info a {
            text-decoration: none;
            color: #007bff;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Mon Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <div class="container">
        <div id="contact" class="contact-container animate__animated animate__zoomIn">
            <div class="contact-header animate__animated animate__fadeInDown">
                <h1>Contactez-moi</h1>
                <p class="text-muted">Je serais ravi de répondre à vos questions ou de collaborer sur des projets.</p>
            </div>
            <div class="contact-info">
                <p class="animate__animated animate__fadeInLeft"><strong>Email :</strong> <a href="mailto:habibdione057@gmail.com">habibdione057@gmail.com</a></p>
                <p class="animate__animated animate__fadeInRight"><strong>Téléphone :</strong> <a href="tel:+221783021553">+221 78 302 1553</a></p>
                <p class="animate__animated animate__fadeInUp"><strong>LinkedIn :</strong> <a href="https://www.linkedin.com/in/habib-dione-23920a25b/?original_referer=https%3A%2F%2Fsn%2Elinkedin%2Ecom%2F&originalSubdomain=sn" target="_blank">Voir mon profil LinkedIn</a></p>
            </div>
        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
