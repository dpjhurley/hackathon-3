<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();

        return view('pets/index', compact('pets'));
    }
}
