@extends('layout.master')
@section('title', 'Home Page')
@section('content')
    <div class="w-full">
        <div class="bg-yellow-400 pl-2 py-2">
            <h1 class="text-2xl">Book List</h1>
        </div>

        <div class="flex my-4">
            <div class="w-1/2">
                <h1 class="font-bold">Title</h1>
            </div>

            <div class="w-1/2">
                <h1 class="font-bold">Author</h1>
            </div>
        </div>

        <hr class="h-px bg-gray-700 border-0">

        @if (count($books) == 0)
            <div class="bg-yellow-400 w-full pl-4 py-2 mt-4"><h1>No Data..</h1></div>
        @endif

        <div class="flex mt-4">
            <div class="w-1/2">
                @foreach ($books as $book)
                    <a href="/{{ $user->id }}/detail/{{ $book->id }}">
                        <div class="bg-gray-200 py-4 pl-4 border-solid border border-current">
                            <h1 class="text-2xl">{{ $book->title }}</h1>
                            <form action="/buyBooks" method="POST" class="w-12 bg-red-500 text-center text-white">
                                @csrf {{-- /token di laravel biar aman --}}
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="book_id" value="{{ $book->id }}">

                                <button type="submit">
                                    BUY
                                </button>
                            </form>
                        </div>
                    </a>

                @endforeach
            </div>
            <div class="w-1/2">
                @foreach ($books as $book)
                    <div class="bg-gray-200 py-4 pl-4 border-solid border border-current">
                        <h1 class="text-2xl">{{ $book->detail->author }}</h1>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
@endsection
