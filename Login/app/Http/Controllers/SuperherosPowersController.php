<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//Return Information of the user 
use App\Models\superpower;


class SuperherosPowersController extends Controller
{
    public function index()
    {
        $page_title = "Superpower";
        $superpowers = superpower::where('active', 1)
        ->select('id', 'name', 'description')
        ->get();
    

        return view('superpowers.index', compact('superpowers', 'page_title'));
    }

    public function create()
    {

        $page_title = "Create Superpower";

        return view('superpowers.create', compact( 'page_title'));
    }

    public function store(Request $request)
    {
        superpower::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request ->description
        ]);

        return redirect()->route('superpowers.index');
    }

    public function show(string $id)
    {

        $page_title = "Create Superpower";

        $superpowers = superpower::where('user_id', Auth::id())
        ->where('active',1)
        ->where('id',$id)
        ->select('id','name' ,'description')
        ->firstOrFail();

        return view('superpowers.show',compact('superpowers', 'page_title'));
    }
    public function edit( string $id)
    {
        $page_title = "Create Superpower";

        $superpowers = superpower::where('user_id', Auth::id())
        ->where('active',1)
        ->where('id',$id)
        ->select('id','name' ,'description')
        ->firstOrFail();

        return view('superpowers.edit',compact('superpowers', 'page_title') );
    }

    public function update(Request $request, string $id)
    {
        $superpowers = superpower::where('user_id', Auth::id())
        ->where('active',1)
        ->where('id',$id)
        ->select('id','name' ,'description')
        ->firstOrFail();

        $superpowers-> update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('superpowers.show',$id); //return to the view to see the updates
    }

    public function destroy(string $id)
    {
        $superpowers = superpower::where('user_id', Auth::id())
        ->where('active',1)
        ->where('id',$id)
        ->select('id','name' ,'description')
        ->firstOrFail();

        $superpowers-> update([
            'active' => false  
        ]);
        
        return redirect()->route('superpowers.index');
    }
}
