<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'proyecto 01',
                'desc' => 'DESCRIPCION',
                'link' => '#'
            ],
            [
                'title' => 'proyecto 02',
                'desc' => 'DESCRIPCION',
                'link' => '#'
            ],
            [
                'title' => 'proyecto 03',
                'desc' => 'DESCRIPCION',
                'link' => '#'
            ],
            [
                'title' => 'proyecto 04',
                'desc' => 'DESCRIPCION',
                'link' => '#'
            ],
            [
                 'title' => 'proyecto 05',
                'desc' => 'DESCRIPCION',
                'link' => '#'
            ],
            [
                'title' => 'proyecto 06',
                'desc' => 'DESCRIPCION',
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