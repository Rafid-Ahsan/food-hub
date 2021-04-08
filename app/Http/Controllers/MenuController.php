<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{
    public function show_form() {
        return view('menu_form');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);


        Menu::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->route('admin')->with('status', 'You have successfuly add menu');
    }
}
