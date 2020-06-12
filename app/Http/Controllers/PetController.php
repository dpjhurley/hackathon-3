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

    public function show($pet_id){
        
        
         $pet = Pet::findOrFail($pet_id);
         return view('pets.show', compact('pet'));
        }
}

