<x-template-layout>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-3xl text-black pb-6">Fibonacci</h1>
    <!-- Input -->
    <div class="h-screen w-screen flex justify-center items-center">
        
        <form class="bg-teal-500 shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[500px]" method="post"action="{{route('fibonacci')}}">
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{session()->get('success')}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            @endif

            @csrf
            <div class="flex items-center justify-center">
                <div>
                    <h1 class="font-bold text-center text-3xl text-black pt-4 mb-8 ">Fibonacci Series</h1>
                    <label class="text-black">input first row</label>
                    <input type="number" id="Firstindex" class="shadow appearance-none border rounded w-full py-2 px-3 text-black mb-4" name="row1"/>
                    <label class="text-black">input second row</label>
                    <input type="number" id="Secondindex" class="shadow appearance-none border rounded w-full py-2 px-3 text-black mb-4" name="row2"/>
                    <div class="flex justify-center items-center mt-8">
                    <input class="rounded-md px-2 py-1 bg-black text-white hover:bg-gray-400" cursor="pointer" type="submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

</x-template-layout>