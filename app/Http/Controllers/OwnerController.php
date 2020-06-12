<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();

        return view('owners/index', compact('owners'));
    }
}
