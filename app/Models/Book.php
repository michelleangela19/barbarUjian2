<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Transaction;

class Book extends Model
{
    use HasFactory;

    // KALAU KASUSNYA PENAMAAN TIDAK SESUAI STANDAR LARAVEL
    // protected $table = "Books";
    // protected $primaryKey = "id_books";

    public function category(){
        return $this->belongsTo(Category::class);

        // KALAU PENAMAAN FOREIGN KEY TIDAK SESUAI "book_id
        // return $this->belongsTo(Book::class, "IdBook");
    }

    public function detail(){
        return $this->hasOne(Detail::class);
    }

    public function transaction(){
        return $this->hasMany(transaction::class);
    }
}
