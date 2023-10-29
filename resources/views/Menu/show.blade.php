<x-layout>
    <div class="px-4">
        <x-menu-card :$menu>
            @forelse ($categories as $category)
                <h1>{{$category->name}}</h1>
            @empty
                <h1>No Categories</h1>
            @endforelse
        </x-menu-card>
    </div>
</x-layout>
