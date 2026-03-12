<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

   public function index()
    {
        // Datos de ejemplo para tus proyectos
        $projects = [
            [
                'title' => 'E-commerce Laravel',
                'desc' => 'Una tienda online completa con carrito y pagos.',
                'link' => '#'
            ],
            [
                'title' => 'App de Tareas',
                'desc' => 'Gestor de tareas con autenticación y API.',
                'link' => '#'
            ],
            [
                'title' => 'Landing Page',
                'desc' => 'Diseño responsive para una agencia de marketing.',
                'link' => '#'
            ],
        ];

        return view('home', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

}
