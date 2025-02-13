<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Variable globale pour le nom
    protected $name = 'Habib DIONE';

    // Méthode pour afficher la page d'accueil
    public function index()
    {
        return view('portfolio', ['name' => $this->name]);
    }

    // Méthode pour afficher la page Mes Projets
    public function projets()
    {
        return view('projets', ['name' => $this->name]);
    }

    // Méthode pour afficher la page Mes Compétences
    public function competences()
    {
        return view('competences', ['name' => $this->name]); // Passer la variable 'name'
    }

    // Méthode pour afficher la page Contactez-moi
    public function contact()
    {
        return view('contact', ['name' => $this->name]); // Passer la variable 'name'
    }

    public function cv()
{
    $name = 'Habib DIONE'; // Définit le nom de l'utilisateur
    return view('cv', compact('name')); // Passe la variable 'name' à la vue
}

public function experience()
{
    $name = 'Habib DIONE'; // Définit le nom de l'utilisateur
    return view('experience', compact('name')); // Passe la variable 'name' à la vue
}

}
