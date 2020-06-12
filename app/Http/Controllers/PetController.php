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

    public function show($pet_id)
    {
         $pet = Pet::findOrFail($pet_id);

         $owner = Owner::where('id', $pet->owner_id)->first();

         return view('pets.show', compact('pet','owner'));
        }

    public function create()
    {
        $pet = new Pet;

        return view('pets.edit', compact('pet'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $pet = new Pet;

        $pet->name = $request->input('name');
        $pet->weight = $request->input('weight');
        $pet->age = $request->input('age');
        $pet->breed = $request->input('breed');
        $pet->photo = $request->input('photo');
   
        $pet->save();

        session()->flash('success_message', 'Your pet was successfully saved!');

        return redirect()->route('pets.edit', [$pet->id]);
    }

    public function edit($id)
    {
        $pet = Pet::findOrFail($id);

        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $pet = Pet::findOrFail($id);

        $pet->name = $request->input('name');
        $pet->weight = $request->input('weight');
        $pet->age = $request->input('age');
        $pet->breed = $request->input('breed');
        $pet->photo = $request->input('photo');

        $pet->save();

        session()->flash('success_message', 'Your pet was successfully saved!');

        return redirect()->route('pets.edit', [$pet->id]);
    }
}

