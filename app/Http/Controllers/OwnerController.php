<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Pet;
class OwnerController extends Controller
{
    public function index(Request $request)
    {
        if($request->input('search_by_owner_name')){
            $owners = Owner::where('first_name', 'like', "%".$request->input('search_by_owner_name')."%")->orderBy('first_name', 'asc')->get();
        } else {
            $owners = Owner::all();
        }

        return view('owners/index', compact('owners'));
    }

    public function show($id){
        
       

         $owners = Owner::findOrFail($id);

         $pets = Pet::where('owner_id', $id)->get();

         return view('owners.show', compact('owners' , 'pets'));

        }
}
