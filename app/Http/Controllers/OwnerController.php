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

    public function show($id)
    {    
        $owners = Owner::findOrFail($id);

        $pets = Pet::where('owner_id', $id)->get();

        return view('owners.show', compact('owners' , 'pets'));

    }

    public function create()
    {
        $owner = new Owner;

        return view('owners.edit', compact('owner'));
    }

    public function store(Request $request)
    {
        /* $this->validate($request, [
            'first_name' => 'required',
            'surname' => 'required'
        ]); */

        $owner = new Owner;

       /*  $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname'); */
   
        $owner->save();

        session()->flash('success_message', 'Your owner was successfully saved!');

        return redirect()->route('owners.edit', [$owner->id]);
    }

    public function edit($id)
    {
        $owner = Owner::findOrFail($id);

        return view('owners.edit', compact('owner'));
    }

    public function update(Request $request, $id)
    {
       /*  $this->validate($request, [
            'first_name' => 'required',
            'surname' => 'required'
        ]); */

        $owner = Owner::findOrFail($id);
      
       /*  $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname'); */

        $owner->save();

        session()->flash('success_message', 'Your owner was successfully saved!');

        return redirect()->route('owners.edit', [$owner->id]);
    }
}