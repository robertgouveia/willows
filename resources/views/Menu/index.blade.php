<x-layout>

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
