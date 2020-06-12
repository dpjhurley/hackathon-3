<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\Owner;

class PetController extends Controller
{
    public function index(Request $request)
    {
        if($request->input('search_by_pet_name')){
            $pets = Pet::where('name', 'like', "%".$request->input('search_by_pet_name')."%")->orderBy('name', 'asc')->get();
        } else {
            $pets = Pet::all();
        }

        return view('pets/index', compact('pets'));
    }

    public function show($pet_id){
        
        
         $pet = Pet::findOrFail($pet_id);

         $owner = Owner::where('id', $pet->owner_id)->first();

         return view('pets.show', compact('pet','owner'));
        }
}

