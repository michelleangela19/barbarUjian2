<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class DetailController extends Controller
{
    public function show($id){
        $book = Book::find($id); // ==> hanya untuk cari 1 data doank
        // $categories = Category::all();

        return view("detail", compact("book"));
    }
}
