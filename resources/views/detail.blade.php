@extends('layout.master')
@section('title', 'Detail Page')
@section('content')
    <div class="w-full">
        <div class="bg-yellow-400 pl-2 py-2">
            <h1 class="text-2xl">Book Detail</h1>
        </div>

        <h1 class="py-2">Title : {{ $book->title }}</h1>
        <h1 class="py-2">Author : {{ $book->detail->author}}</h1>
        <h1 class="py-2">Publisher : {{ $book->detail->publisher }}</h1>
        <h1 class="py-2">Year : {{ $book->detail->year }}</h1>
        <h1 class="py-2">Description :</h1>
        <h1 class="py-2">{{ $book->detail->description }}</h1>
    </div>
@endsection
