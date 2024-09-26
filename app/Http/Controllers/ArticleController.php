<?php

namespace App\Http\Controllers;

use App\Models\Article; // Import the Article model
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles', ['articles' => $articles]);
    }

    public function edit($id)
    {
        return view('edit', ['articles' => $articles]);
    }

    public function delete($idjmn)
    {
        return view('articles', ['articles' => $articles]);
    }
}
