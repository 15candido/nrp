@props(['image' => null, 'name' => null, 'url' => '#'])
<a href="{{ $url }}" class="hover:scale-[1.01]">
    <article class="h-full border-solid shadow-md bg-white border-nrp-blue border-2 overflow-hidden rounded-xl">
        <img src="{{ $image }}" class="bg-red-400">
        <div class="px-4 py-2 rounded-lg">
            <p class="font-bold">{{ $name }}</p>
            <div>{!! $slot !!}</div>            
        </div>
    </article>
</a>