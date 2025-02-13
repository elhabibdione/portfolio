<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de {{ $name }}</title>
    <!-- Liens vers les fichiers CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Navbar verticale -->
            <div class="col-md-3">
                <div class="list-group">
                    <!-- Redirection vers la page Mes Projets -->
                    <a href="projets.html" class="list-group-item list-group-item-action">Mes Projets</a>
                    <!-- Redirection vers la page Mes Compétences -->
                    <a href="competences.html" class="list-group-item list-group-item-action">Mes Compétences</a>
                    <!-- Redirection vers la page Contactez-moi -->
                    <a href="contact.html" class="list-group-item list-group-item-action">Contactez-moi</a>
                </div>
            </div>
            
            <!-- Contenu de la page -->
            <div class="col-md-6">
                <h1>Bienvenue sur mon portfolio</h1>
                
                <!-- Section Description de la carrière professionnelle -->
                <div id="description">
                    <h2>Ma Carrière</h2>
                    <p>
                        Je suis un professionnel passionné par le développement web et les technologies. J'ai travaillé sur des projets variés, allant de la gestion de bases de données à la création d'interfaces utilisateur élégantes et intuitives. Mon expertise inclut des technologies telles que Laravel, Angular, Flutter, et bien plus. Mon objectif est d'apporter des solutions innovantes et efficaces pour améliorer l'expérience utilisateur et la performance des systèmes.
                    </p>
                </div>
            </div>

            <!-- Photo de profil à droite -->
            <div class="col-md-3 text-center">
                <img src="{{ asset('images/habib.jpg') }}" alt="Photo de {{ $name }}" class="img-fluid rounded-circle" style="max-width: 250px;">
            </div>
        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
