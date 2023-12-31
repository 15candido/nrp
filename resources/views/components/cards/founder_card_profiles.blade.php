@props(['name', 'witness', 'image'])
<article class="flex flex-col gap-6 p-4 items-center bg-white rounded-lg shadow-md">
    <header class="w-24 h-24 rounded-full overflow-hidden">
        <img src="{{asset($image)}}" class="w-full h-full object-cover bg-gray-400">
    </header>
    <div class="flex flex-col justify-center space-y-1 text-center">
        <h5>{{$name}}</h5>
        <p>{{$witness}}</p>
    </div>
    <footer>
        <x-buttons.button>Saiba + </x-buttons.button>
    </footer>
</article>