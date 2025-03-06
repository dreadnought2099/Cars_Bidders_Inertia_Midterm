<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {

        $cars = Car::all();
        return Inertia::render('Cars', ['cars' => $cars]);
    }
}
