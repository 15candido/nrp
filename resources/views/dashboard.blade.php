<x-app-layout>

    {{--Page title--}}
    <x-slot name="title">
            {{ ('Dashboard') }}
    </x-slot>
    {{-- Main Section --}}
    <div class="py-12">
        <div class="max-w-full mx-auto">
            <div class="flex flex-col gap-12 overflow-hidden">
                <h2>Dashbaord</h2>
               <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum eveniet perferendis, 
                    natus expedita sunt quasi consequuntur blanditiis quidem. Debitis optio quod consequatur 
                    molestiae maiores laboriosam obcaecati fuga, illo ex laudantium!
               </p>
                <a href="/children"><div class="bg-blue-400 p-4 border rounded">Crianças</div></a>
            </div>
        </div>
    </div>   
</x-app-layout>

