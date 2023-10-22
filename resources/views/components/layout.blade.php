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
        <h1 class="text-2xl font-medium">Willows</h1>
        <div class="flex items-center space-x-4">
            <p class="text-xs text-slate-500">Call to book</p>
            <a href="tel:+441283810620" class="px-3 py-1 border border-slate-300 rounded-md font-medium hover:bg-slate-200">Call</a>
        </div>
    </nav>
{{$slot}}
</body>
</html>
