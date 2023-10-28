<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Willows</title>
</head>
<body class="bg-slate-200">
    <nav class="bg-white px-4 py-2 flex justify-between items-center border-b border-slate-300 mb-4">
        <a href="/" class="text-2xl font-medium">Willows</a>
        <div class="flex items-center space-x-2">
            <p class="text-xs text-slate-500">Call to book</p>
            <a href="tel:+441283810620" class="px-3 py-1 border border-slate-300 rounded-md font-medium hover:bg-slate-200">Call</a>
            @auth
            <form action="{{route('auth.destroy')}}" method="POST">
            @csrf
            @method('DELETE')
            <button href="/logout" class="px-3 py-1 border border-slate-300 rounded-md hover:bg-slate-200  font-medium">Logout</button>
            </form>
            @else
            <a href="{{route('auth.create')}}" class="px-3 py-1 border border-slate-300 rounded-md hover:bg-slate-200  font-medium">Login</a>
            @endauth
        </div>
    </nav>
{{$slot}}
</body>
</html>
