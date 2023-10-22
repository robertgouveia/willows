<x-layout>

    <!-- Main Image -->
    <div class="px-4 my-4">
        <img src="{{URL::to('Images/Image1.jpg')}}" alt="" class="object-cover w-full h-[300px] rounded-md border border-slate-300">
    </div>

    <div class="flex px-4 my-4 items-center space-x-4">
        <h1 class="text-sm px-3 py-1 border border-slate-300 rounded-md font-medium hover:bg-slate-100">Menu List Below</h1>
        <p class="text-slate-500 text-sm">Click Show</p>
    </div>

    <!-- Menu's -->

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-4 px-4">
        @forelse ($menus as $menu)
        <x-menu-card :$menu>
            <x-link-button :href="route('menu.show', $menu)">Show</x-link-button>
        </x-menu-card>
        @empty
        No Menu's
        @endforelse
    </div>

</x-layout>
