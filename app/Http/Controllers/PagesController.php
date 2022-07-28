<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Alam";
        return Inertia::render('Home', [
            'title' => $title,
        ]);
    }

    public function about()
    {
        $data = [
            "name" => "Alam",
            "age" => 20,
        ];
        return Inertia::render('About', [
            'name' => $data["name"],
            'age' => $data["age"],
        ]);
    }
}
