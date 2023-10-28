<x-layout>
    <!-- Main Image -->
    <div class="px-4 my-4 flex justify-center">
        <img src="{{URL::to('Images/Image1.jpg')}}" alt="" class="object-cover w-full h-[300px] max-w-[1400px] rounded-md border border-slate-300">
    </div>
    <div class="flex flex-col items-center lg:items-stretch lg:flex-row h-full px-4 space-y-2 space-x-0 lg:space-y-0 lg:space-x-1 justify-center">
        <div class="w-full bg-white rounded-md border border-slate-300 p-3 lg:w-[400px]">
            <div class=" h-full  flex flex-col lg:flex-row">
                <div class="w-full flex flex-col items-center">
                    <div class="w-full">
                        <h1 class="text-center text-lg font-medium">Opening Times</h1>
                        <hr class="w-full h-[2px] my-2">
                    </div>
                    <div class="w-full h-full flex flex-col items-center justify-center pb-3">
                        <h4 class="font-bold text-lg text-slate-500"><span class="text-md font-normal text-black">Monday:</span> 10.00 - 16.00</h4>
                        <h4 class="font-bold text-lg text-slate-500"><span class="text-md font-normal text-black">Tuesday:</span> 10.00 - 16.00</h4>
                        <h4 class="font-bold text-lg text-slate-500"><span class="text-md font-normal text-black">Wednesday:</span> 10.00 - 16.00</h4>
                        <h4 class="font-bold text-lg text-slate-500"><span class="text-md font-normal text-black">Thursday:</span> 10.00 - 16.00</h4>
                        <h4 class="font-bold text-lg text-slate-500"><span class="text-md font-normal text-black">Friday:</span> 10.00 - 16.00</h4>
                        <h4 class="font-bold text-lg text-slate-500"><span class="text-md font-normal text-black">Saturday:</span> 10.00 - 16.00</h4>
                        <h4 class="font-bold text-lg text-slate-500"><span class="text-md font-normal text-black">Sunday:</span> 10.00 - 16.00</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:max-w-[1000px] lg:w-3/4 bg-white rounded-md border border-slate-300 p-3 text-center flex flex-col">
            <h1 class="text-center text-lg font-medium">Location</h1>
            <hr class="w-full h-[2px] my-2">
            <img src="{{URL::to('Images/Image2.png')}}" alt="" class="object-cover max-w-1/2 h-[200px] rounded-md">
            <h1 class="text-2xl font-medium text-slate-700">8 High St, Tutbury, Burton-on-Trent DE13 9LP</h1>
        </div>
    </div>
    <div class="flex flex-col w-full justify-center items-center px-4">
        <div class="flex mb-1 mt-5 items-center space-x-4 w-full max-w-[1400px]">
            <h1 class="text-sm px-3 py-1 border border-slate-300 rounded-md font-medium hover:bg-slate-100">Menu List Below</h1>
            <p class="text-slate-500 text-sm">Click Show</p>
        </div>
        <!-- Menu's -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-1 gap-y-2 max-w-[1400px]">
            @forelse ($menus as $menu)
            <x-menu-card :$menu>
                <x-link-button :href="route('menu.show', $menu)">Show</x-link-button>
            </x-menu-card>
            @empty
            No Menu's
            @endforelse
        </div>
    </div>
</x-layout>
