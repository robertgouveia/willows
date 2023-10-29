<x-layout>
    <div class="px-4">
        <x-menu-card :$menu>
            @forelse ($categories as $category)
                <h1 class="w-full text-center font-medium text-2xl text-slate-500 border-y border-slate-300 py-2">{{$category->name}}</h1>
                <div class="w-full flex justify-center items-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-1 gap-y-2 max-w-[1400px] w-full">
                        @forelse ($category->items as $item)
                        <div class="w-full flex flex-col text-center">
                            <div class="text-lg font-medium">{{$item->name}}</div>
                            <div>{{$item->description}}</div>
                            <div class="text-sm text-slate-400">£{{$item->price}}</div>
                        </div>
                        @empty
                        No Items
                        @endforelse
                    </div>
                </div>
            @empty
                <h1>No Categories</h1>
            @endforelse
        </x-menu-card>
    </div>
</x-layout>
