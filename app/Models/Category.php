<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    use HasFactory;

    // KALAU KASUSNYA PENAMAAN TIDAK SESUAI STANDAR LARAVEL
    // protected $table = "Books";
    // protected $primaryKey = "id_books";

    public function book(){
        return $this->hasMany(Book::class);
    }
}
