@extends('layout.master')
@section('title', 'Transaction Page')

@section('content')
<div class="w-full">
    <div class="bg-yellow-400 pl-2 py-2">
        <h1 class="text-2xl">My Transaction</h1>
    </div>

    <div class="flex my-4">
        <div class="w-1/2">
            <h1 class="font-bold">Title</h1>
        </div>

        <div class="w-1/2">
            <h1 class="font-bold">Date</h1>
        </div>
    </div>

    @if (count($transactions) == 0)
        <div class="bg-yellow-400 w-full pl-4 py-2 mt-4"><h1>No Data..</h1></div>
    @endif

    <div class="flex mt-4">
        <div class="w-1/2">
            @foreach ($transactions as $transaction)
                <div class="bg-gray-200 py-4 pl-4 border-solid border border-current">
                    <h1 class="text-2xl">{{ $transaction->book->title }}</h1>
                </div>

            @endforeach
        </div>
        <div class="w-1/2">
            @foreach ($transactions as $transaction)
                <div class="bg-gray-200 py-4 pl-4 border-solid border border-current">
                    <h1 class="text-2xl">{{ $transaction->transaction_date }}</h1>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
