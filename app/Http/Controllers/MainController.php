<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
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

    function category($id)
    {
        $category = Category::find($id);
        $posts = Post::where('category_id', '=', $id)->paginate(3);
        return view('category', compact('category', 'posts'));
    }

    function post($id)
    {
        $post = Post::find($id);
        return view('post', compact('post'));
    }
}
