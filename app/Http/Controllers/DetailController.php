<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class DetailController extends Controller
{
    public function show($id, $idBook){
        $book = Book::find($idBook); // ==> find() hanya untuk cari 1 data doank
        $user = User::find($id);
        // $categories = Category::all();

        return view("detail", compact("book", "user"));
    }
}
