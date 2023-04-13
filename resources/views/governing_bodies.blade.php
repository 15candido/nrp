<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Orgãos Sociais') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header src="images/project/carouselsocial2.jpg" title="Orgãos sociais" fromPage="quem somos" toPage="Orgãos sociais" alt="Imagem da Na Rota dos Povos" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col gap-6">
                <div class="flex flex-col">
                    <h3>Orgãos Sociais</h3>
                    <p class="flex flex-col break-words">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nemo
                        expedita nisi neque, facilis aperiam quod? Ipsa ipsum voluptatibus officiis cum minima ipsam
                        maiores, tempora nostrum facere reprehenderit facilis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nemo
                        expedita nisi neque, facilis aperiam quod? Ipsa ipsum voluptatibus officiis cum minima ipsam
                        maiores, tempora nostrum facere reprehenderit facilis
                    </p>
                </div>
                <h3>Mesa da assembleia geral</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($profiles as $profile)
                    @if($profile->position == 'General assembly table')
                    <x-cards.members-card-profile :content="$profile" />
                    @endif
                    @endforeach
                </div>
                <h3>Direção</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    @foreach($profiles as $profile)
                    @if($profile->position == 'CEO')
                    <x-cards.members-card-profile :content="$profile" />
                    @endif
                    @endforeach
                </div>
                <h3>Conselho fiscal</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    @foreach($profiles as $profile)
                    @if($profile->position == 'Supervisory board')
                    <x-cards.members-card-profile :content="$profile" />
                    @endif
                    @endforeach
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>