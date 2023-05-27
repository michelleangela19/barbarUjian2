
<div class="w-full text-center bg-blue-500 py-20">
    <h1 class="font-thin text-white text-5xl">HAPPY BOOK STORE</h1>
    <h1 class="py-2 font-thin text-white text-2xl">Hai, {{ $user->name }}!</h1>
    @if ($user->grade == '1')
        <h1 class="text-green-300">Grade: 1</h1>
    @elseif ($user->grade == "2")
        <h1 class="text-red-300">Grade: 2</h1>
    @endif
</div>
<div class="py-4">
    <ul class="flex justify-center gap-10">
        <li class="">
          <a class="text-blue-500 hover:text-blue-800" href="/{{ $user->id }}">Home</a>
        </li>
        <li class="text-blue-500 hover:text-blue-800" data-dropdown-toggle="dropdown">
          <button>Category</button>
        </li>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                @php
                    $categories = App\Models\Category::all();
                @endphp
                @foreach ($categories as $category)
                    <li>
                        <a href="/{{ $user->id }}/category/{{ $category->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            {{ $category->category }}
                        </a>
                    </li>
                @endforeach
            </ul>
            @if (count($categories) == 0)
                <h1>No Category..</h1>
            @endif
        </div>
        <li class="">
          <a class="text-blue-500 hover:text-blue-800" href="/{{ $user->id }}/contact">Contact</a>
        </li>
        <li class="">
            <a class="text-blue-500 hover:text-blue-800" href="/{{ $user->id }}/transaction">My_Transaction</a>
          </li>
    </ul>
</div>
