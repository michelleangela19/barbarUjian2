<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class BookController extends Controller
{
    public function index($id){
        $user = User::find($id);
        $books = Book::all();
        // $categories = Category::all();

        return view("home", compact("books", "user"));
    }
}
