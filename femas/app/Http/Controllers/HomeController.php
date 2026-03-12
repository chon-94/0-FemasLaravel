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
                'desc' => 'xxxxxxxxx    xxxxxx  xxxxxx',
                'link' => '#'
            ],
            [
                'title' => 'proyecto 02',
                'desc' => 'xxxxxxxxx    xxxxxx  xxxxxx',
                'link' => '#'
            ],
            [
                'title' => 'proyecto 03',
                'desc' => 'xxxxxxxxx    xxxxxx  xxxxxx',
                'link' => '#'
            ],
            [
                'title' => 'proyecto 04',
                'desc' => 'xxxxxxxxx    xxxxxx  xxxxxx',
                'link' => '#'
            ],
            [
                 'title' => 'proyecto 05',
                'desc' => 'xxxxxxxxx    xxxxxx  xxxxxx',
                'link' => '#'
            ],
            [
                'title' => 'proyecto 06',
                'desc' => 'xxxxxxxxx    xxxxxx  xxxxxx',
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