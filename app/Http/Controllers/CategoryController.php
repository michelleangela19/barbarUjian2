<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function show($id, $idCategory){
        $books = Book::where("category_id","=",$idCategory)->get();
        $user = User::find($id);
        $books = Category::find($idCategory)->Book; //cara lain dimana nyarinya dari tabel kategori trus ambil "Book" nya lewat FK

        // $categories = Category::all();

        return view("home", compact("books", "user"));
    }
}
