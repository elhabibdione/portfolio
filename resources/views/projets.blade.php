<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets - {{ $name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        /* Header Animation */
        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        .header {
            text-align: center;
            padding: 30px 0;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .header h1 {
            font-weight: bold;
            margin-bottom: 10px;
            animation: slideIn 1s ease-out;
        }

        /* Card Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            opacity: 0;
            transform: translateY(20px);
        }

        .card:nth-child(1) {
            animation: fadeIn 0.8s ease-in-out forwards;
            animation-delay: 0.2s;
        }
        .card:nth-child(2) {
            animation: fadeIn 0.8s ease-in-out forwards;
            animation-delay: 0.4s;
        }
        .card:nth-child(3) {
            animation: fadeIn 0.8s ease-in-out forwards;
            animation-delay: 0.6s;
        }
        .card:nth-child(4) {
            animation: fadeIn 0.8s ease-in-out forwards;
            animation-delay: 0.8s;
        }
        .card:nth-child(5) {
            animation: fadeIn 0.8s ease-in-out forwards;
            animation-delay: 1s;
        }
        .card:nth-child(6) {
            animation: fadeIn 0.8s ease-in-out forwards;
            animation-delay: 1.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        .card-title {
            color: #007bff;
            font-weight: bold;
        }
        .card-text {
            font-size: 0.9rem;
            color: #6c757d;
        }

        /* Button Animation */
        .btn-primary {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-primary:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .container {
            max-width: 1200px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Header Section -->
        <div class="header">
            <h1>Mes Projets</h1>
            <p>Découvrez une liste de mes projets récents et passionnants.</p>
        </div>

        <!-- Projects Grid -->
<div class="row">
    <!-- Projet 1 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="ratio ratio-16x9">
                <video controls>
                    <source src="{{ asset('videos/gestiondechethann.mp4') }}" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
            <div class="card-body">
                <h5 class="card-title">Projet 1</h5>
                <p class="card-text">Création d'une application mobile avec flutter pour la remontée des données SIG dans la commune de Hann bel air.</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>

    <!-- Projet 2 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="ratio ratio-16x9">
                <video controls>
                    <source src="{{ asset('videos/cartographie.mp4') }}" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
            <div class="card-body">
                <h5 class="card-title">Projet 2</h5>
                <p class="card-text">Diagnostique du dispositif et cartographie du réseaux de drainage de la commune de Ziguinchor avec Cheikh Bamba Fall Responsable SIG, Habib DIONE et Adiouma Fall (Chargé d'exploitation SIG à la SONAGED SA.)</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>

    <!-- Projet 3 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="ratio ratio-16x9">
                <video controls>
                    <source src="{{ asset('videos/projet3.mp4') }}" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
            <div class="card-body">
                <h5 class="card-title">Projet 3</h5>
                <p class="card-text">Création d'applications mobiles avec Flutter pour une expérience utilisateur optimale.</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>

    <!-- Projet 4 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="ratio ratio-16x9">
                <video controls>
                    <source src="{{ asset('videos/projet4.mp4') }}" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
            <div class="card-body">
                <h5 class="card-title">Projet 4</h5>
                <p class="card-text">Gestion des commandes de burgers avec Laravel et Vue.js.</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>

    <!-- Projet 5 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="ratio ratio-16x9">
                <video controls>
                    <source src="{{ asset('videos/projet5.mp4') }}" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
            <div class="card-body">
                <h5 class="card-title">Projet 5</h5>
                <p class="card-text">Optimisation de la gestion des déchets grâce à Flutter et des outils modernes.</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>

    <!-- Projet 6 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="ratio ratio-16x9">
                <video controls>
                    <source src="{{ asset('videos/gestiondechethann.mp4') }}" type="video/mp4">
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
            <div class="card-body">
                <h5 class="card-title">Projet 6</h5>
                <p class="card-text">Système de gestion des déchets avec intégration de technologies SIG.</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

