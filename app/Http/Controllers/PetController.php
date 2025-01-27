<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    public function filter(Request $request)
    {
        $query = Pet::query();

        if ($request->has('kind')) {
            $query->where('kind', $request->kind);
        }

        if ($request->has('location')) {
            $query->where('location', $request->location);
        }

        if ($request->has('date')) {
            $query->where('available_from', '<=', $request->date)
                  ->where('available_to', '>=', $request->date);
        }

        $pets = $query->get();
        return view('pets.index', compact('pets'));
    }
}
