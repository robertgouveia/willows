<x-layout>
    <nav class="bg-white px-4 py-2 flex justify-between items-center border-b border-slate-300 mb-4">
        <h1 class="text-2xl font-medium">Willows</h1>
        <div class="flex items-center space-x-4">
            <p class="text-xs text-slate-500">Call to book</p>
            <button class="px-3 py-1 border border-slate-300 rounded-md font-medium hover:bg-slate-200">Call</button>
        </div>
    </nav>

    <!-- Menu's -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-4">
        @forelse ($menus as $menu)
        <x-menu-card :$menu></x-menu-card>
        @empty
        No Menu's
        @endforelse
    </div>

</x-layout>
