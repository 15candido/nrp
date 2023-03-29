<!-- Ongoi projects Card -->
@foreach($projects as $project)
<article class="flex w-full h-full justify-start items-center">
    <div class="flex flex-col w-full h-full bg-white rounded-lg shadow-md justify-center md:max-w-md">
        <a href="/projetos/{{$project->slug}}" class="pointer-events-none">
            <img src="{{$project->image}}" class="pointer-events-auto rounded-t-lg hover:opacity-75" alt="{{$project->alt}}">
        </a>
        <div class="w-full h-full space-y-4 p-4 rounded-lg hover:bg-gray-100">
            <a href="/projetos/{{$project->slug}}">
                <h4 class=" md:truncate hover:break-words">
                    {{$project->name}}
                </h4>
            </a>
            <p class="text-base text-gray-600 break-words">{{ $project->short_description }}</p>
            <x-buttons.button string="Saiba +" url="projetos/{{$project->slug}}" />
        </div>
    </div>
</article>

@endforeach