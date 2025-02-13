<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Route pour afficher la page d'accueil
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

// Route pour afficher la page Mes Projets
Route::get('/projets', [PortfolioController::class, 'projets'])->name('portfolio.projets');

// Route pour afficher la page Mes Compétences
Route::get('/competences', [PortfolioController::class, 'competences'])->name('portfolio.competences');

// Route pour afficher la page Contactez-moi
Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');

// Route pour afficher la page CV
Route::get('/cv', [PortfolioController::class, 'cv'])->name('portfolio.cv');

// Route pour afficher la page Expérience Professionnelle
Route::get('/experience', [PortfolioController::class, 'experience'])->name('portfolio.experience');
