<x-layout>
    @forelse ($categories as $category)
        <div>{{$category->name}}</div>
    @empty
        No Categories
    @endforelse
</x-layout>
