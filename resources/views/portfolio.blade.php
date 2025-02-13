<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de {{ $name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(245, 11, 11);
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }
        .navbar-container {
            background-color: rgba(238, 24, 24, 0.24);
            color: #fff;
            min-height: 100vh;
            padding-top: 20px;
            border-right: 2px solid rgba(255, 255, 255, 0.4);
            animation: fadeInLeft 1.5s;
        }
        .navbar-container h4 {
            text-transform: uppercase;
            font-size: 18px;
            margin-bottom: 20px;
            color: #fff;
            text-align: center;
        }
        .list-group-item {
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
            border: none;
            margin-bottom: 5px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .list-group-item:hover {
            background-color: rgba(242, 17, 55, 0.88);
            color: #fff;
            transform: scale(1.1);
        }
        .profile-img {
            max-width: 300px;
            height: 300px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 4px 10px rgba(213, 10, 10, 0.74);
            transition: transform 0.3s;
        }
        .profile-img:hover {
            transform: rotate(5deg) scale(1.05);
        }
        .description-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(238, 25, 25, 0.89);
            margin-top: 20px;
            animation: fadeInUp 1.5s;
        }
        .description-container h1 {
            color: #343a40;
            font-weight: bold;
        }
        .description-container p {
            text-align: justify;
            line-height: 1.6;
        }
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Navbar verticale -->
            <div class="col-md-3 navbar-container">
                <h4>Navigation</h4>
                <div class="list-group">
                    <a href="{{ url('/competences') }}" class="list-group-item">Mes Compétences</a>
                    <a href="{{ url('/cv') }}" class="list-group-item">Mon Curriculum Vitae</a>
                    <a href="{{ url('/experience') }}" class="list-group-item">Mon Expérience Professionnelle</a>
                    <a href="{{ url('/projets') }}" class="list-group-item">Mes Projets</a>
                    <a href="{{ url('/contact') }}" class="list-group-item">Contactez-moi</a>
                </div>
            </div>

            <!-- Contenu principal -->
            <div class="col-md-6">
                <div class="description-container">
                    <h1>Bienvenue sur mon portfolio</h1>
                    <div id="description">
                        <p>
                            Bonjour, je m'appelle {{ $name }}, je suis Géomaticien-Développeur passionné par l’intégration des technologies géospatiales avec le développement logiciel. Avec une formation en géomatique et un solide savoir-faire en développement, je combine les compétences techniques en SIG (Systèmes d'Information Géographique) et en programmation pour créer des solutions innovantes et efficaces.
                        </p>
                        <p>
                            Mon expertise inclut l’utilisation d’outils SIG comme QGIS, ArcGIS, et des plateformes basées sur des données géographiques, ainsi que le développement de systèmes personnalisés utilisant des technologies modernes telles que Angular, Flutter, PHP, et Laravel. Mon travail consiste à concevoir, développer et déployer des applications qui facilitent la gestion et l’analyse des données géospatiales dans des contextes variés, allant de la gestion de l’environnement à l'optimisation des services publics.
                        </p>
                        <p>
                            Je suis également expérimenté dans le développement d'applications mobiles et web, intégrant des cartes interactives, des analyses spatiales et des outils d’aide à la décision pour répondre aux besoins des utilisateurs.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Photo de profil -->
            <div class="col-md-3 text-center">
                <img src="{{ asset('images/bibou.png') }}" alt="Photo de {{ $name }}" class="img-fluid rounded-circle profile-img mt-4">
            </div>
        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
