<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crafter;

class CrafterController extends Controller
{
    public function index(){
        $crafters = Crafter::all();
        return view('crafter.list', compact('crafters'));
    }

    public function create(){
        return view('crafter.create');
    }

    public function store(Request $request){
        Crafter::create([
            'name' => $request->name,
            'address' => $request->address
        ]);
        return back();
    }

    public function detail($id){
        $crafter = Crafter::findOrFail($id);
        return view('crafter.detail', compact('crafter'));
    }

    public function edit($id){
        $crafter = Crafter::findOrFail($id);
        return view('crafter.edit', compact('crafter'));
    }

    public function update($id, Request $request){
        Crafter::findOrFail($id)->update([
            'name' => $request->name,
            'address' => $request->address
        ]);
        return redirect('/crafter');
    }

    public function delete($id){
        Crafter::destroy($id);
        return back();
    }

}
