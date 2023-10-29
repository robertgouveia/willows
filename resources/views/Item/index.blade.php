<x-layout>
    @forelse ($items as $item)
        <div>{{$item->name}}</div>
    @empty
        No items
    @endforelse
</x-layout>
