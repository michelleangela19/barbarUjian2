<div class="w-full bg-gray-200">
    <div class="bg-yellow-400 pl-2 py-2 mb-4">
        <h1 class="text-2xl">Category</h1>
    </div>
    @php
        $categories = App\Models\Category::all();
    @endphp

    @if (count($categories) == 0)
        <h1>No Category..</h1>
    @endif

    @foreach ($categories as $category)
        <div class="pl-2 py-1">
            <a href="/{{ $user->id }}/category/{{ $category->id }}" class="text-blue-500 hover:text-blue-800">{{ $category->category }}</a>
        </div>
    @endforeach
</div>
