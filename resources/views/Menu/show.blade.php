<x-layout>
    <div class="px-4">
        <x-menu-card :$menu>
            @forelse ($categories as $category)
                <h1>{{$category->name}}</h1>
                @forelse ($category->items as $item)
                    {{$item->name}}
                    {{$item->price}}
                @empty
                    No Items
                @endforelse
            @empty
                <h1>No Categories</h1>
            @endforelse
        </x-menu-card>
    </div>
</x-layout>
