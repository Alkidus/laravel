<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $title = "<em>Main Page</em>";
        $categories = Category::all();
        //dd($categories);
        return view('main', compact('title', 'categories'));
    }
    public function getForm(Request $request)
    {
        //dd($request->all()); dump die останавливает дамп после отработки
        $validated = $request->validate([
            'name' => 'required|min:5|max:10',
            'email' => 'required|email',
        ]);
        return $request->all();
    }
}
