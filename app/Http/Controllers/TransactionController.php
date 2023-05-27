<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function store(Request $request){
        Transaction::create([
            "book_id" => $request->book_id,
            "user_id" => $request->user_id,
            "transaction_date" => date(now())
        ]);

        return redirect($request->user_id);
    }

    public function show($id){
        $user = User::find($id);
        $transactions = Transaction::where("user_id",'=',$id)->get();

        return view("transaction", compact("transactions", "user"));
    }
}
