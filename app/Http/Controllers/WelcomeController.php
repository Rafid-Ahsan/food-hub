<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class WelcomeController extends Controller
{
    public function index() {
        $menus = Menu::get();

        return view('welcome', [
            'menus' => $menus
        ]);
    }
}
