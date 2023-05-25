<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Detail extends Model
{
    use HasFactory;

    // KALAU KASUSNYA PENAMAAN TIDAK SESUAI STANDAR LARAVEL
    // protected $table = "Books";
    // protected $primaryKey = "id_books";

    public function book(){
        return $this->belongsTo(Book::class);

        // KALAU PENAMAAN FOREIGN KEY TIDAK SESUAI "book_id"
        // return $this->belongsTo(Book::class, "IdBook", "IdDetail);
    }
}
