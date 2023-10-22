<div class="bg-white rounded-md border border-slate-300 p-2 flex flex-col justify-between items-start space-y-3">
    <h1 class="text-lg font-medium">{{$menu->title}}</h1>
    <h1 class="text-sm text-slate-500">{{$menu->description}}</h1>
    {{$slot}}
</div>
