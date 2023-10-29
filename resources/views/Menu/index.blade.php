<x-layout>
    @forelse ($menus as $menu)
        <div>{{$menu->title}}</div>
    @empty
        No Menus
    @endforelse
</x-layout>
