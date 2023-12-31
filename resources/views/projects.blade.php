<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projetos') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-cards.page_hero pageName="Projetos" image="/images/project/carouselproject.jpg" />
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col gap-12">
                <div class="flex flex-col gap-6"> <!--area of activity -->
                    <x-sections.text_section_block title="Áreas de intervenção" paragraph="Agimos sob o lema “A Educação é o Único Caminho”, procurando dar respostas em vários 
                        setores da sociedade, em que a falta de condições é um obstáculo para o bem-estar da população 
                        que beneficiam da nossa ação. " />
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 justify-items-center">
                        <x-projects.area :areas="$areas" />
                    </div>
                </div>
                <div class="grid grid-flow-row gap-12 justify-items-center">
                    <x-sections.text_section_block title="Projetos" paragraph="Em 2010, quando decidimos dedicar inteiramente a nossa ação humanitária à Guiné-Bissau, 
                        tínhamos como foco: apoio à educação e a formação cultural. O nosso compromisso em melhorar a condição
                        de vida da comunidade a qual servimos, fez com que alarguemos as nossas ações, respondendo com os 
                        projetos que avisam amenizar os problemas diários em que a carência permanente é uma realidade." />
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center"> <!--all projects of the Rota-->
                        <x-projects.ongoing :projects="$projects" />
                    </div>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>