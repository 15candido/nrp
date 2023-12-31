<!-- Contact form -->
<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Contacto') }}
    </x-slot>
        
    <x-cards.page_hero pageName="Quem Somos" image="images/project/carouselcontact.jpg" />
    

    <x-section>        
        <x-paragraph title="Contacte-nos">
        <div class="flex flex-col space-y-6">
                    <div class="portugal-address flex flex-col pb-4 space-y-4">
                        <h4 class="tracking-wider text-nrp-blue text-xl">Portugal</h4>
                        <div class="address inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2
                                2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="address">
                                Rua Gonçalves Zarco, Nº 2644, 4455-821 - Santa Cruz do Bispo,<br>
                                <p class="">Matosinhos (Zona do Ikea).</p>
                            </span>
                        </div>
                        <div class="phone-number inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2
                                0 1 1 0 0 0 2 0z" />
                            </svg>
                            <span class="phone">(+351) 932 412 050</span>
                        </div>
                        <div class="email inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 
                                0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <span class="email">ongd@narotadospovos.org</span>
                        </div>
                    </div>
                    <div class="Guiné-Bissau-address flex flex-col pb-4 space-y-4">
                        <h4 class="tracking-wider text-nrp-blue text-xl">Guiné-Bissau</h4>
                        <div class="address inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2
                                2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="address">
                                Rua Na Rota dos Povos, Nº 1, Bairro Catió Fula, <br>
                                <p class="">Sector de Catió - Região de Tombali</p>
                            </span>
                        </div>
                        <div class="phone-number inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0
                                1 1 0 0 0 2 0z" />
                            </svg>
                            <span class="phone">(+245) 955 708 624 | (+245) 966 308 624</span>
                        </div>
                        <div class="email inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 
                                0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <span class="email">ongd@narotadospovos.org</span>
                        </div>
                    </div>
                </div>
        </x-paragraph>
    </x-section>

        
    {{--
    <div class="flex justify-center items-center">
        <div class="fixed-width data-block flex flex-col lg:flex-row md:space-x-12 md:space-y-0 lg:rounded-lg overflow-hidden">
            <section class="space-y-6">
                <div class="flex flex-col gap-4 justify-center text-3xl">
                    <h3>Contacte-nos</h3>                    
                </div>
                <div class="flex flex-col space-y-6">
                    <div class="portugal-address flex flex-col pb-4 space-y-4">
                        <h4 class="tracking-wider text-nrp-blue text-xl">Portugal</h4>
                        <div class="address inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2
                                2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="address">
                                Rua Gonçalves Zarco, Nº 2644, 4455-821 - Santa Cruz do Bispo,<br>
                                <p class="">Matosinhos (Zona do Ikea).</p>
                            </span>
                        </div>
                        <div class="phone-number inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2
                                0 1 1 0 0 0 2 0z" />
                            </svg>
                            <span class="phone">(+351) 932 412 050</span>
                        </div>
                        <div class="email inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 
                                0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <span class="email">ongd@narotadospovos.org</span>
                        </div>
                    </div>
                    <div class="Guiné-Bissau-address flex flex-col pb-4 space-y-4">
                        <h4 class="tracking-wider text-nrp-blue text-xl">Guiné-Bissau</h4>
                        <div class="address inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2
                                2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="address">
                                Rua Na Rota dos Povos, Nº 1, Bairro Catió Fula, <br>
                                <p class="">Sector de Catió - Região de Tombali</p>
                            </span>
                        </div>
                        <div class="phone-number inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                                <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0
                                1 1 0 0 0 2 0z" />
                            </svg>
                            <span class="phone">(+245) 955 708 624 | (+245) 966 308 624</span>
                        </div>
                        <div class="email inline-flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 
                                0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <span class="email">ongd@narotadospovos.org</span>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="relative md:w-[700px] min-h-full">
                <div class="up-shape absolute z-0 w-40 h-40  bg-gradient-to-r from-[#287271]  to-[#264653] rounded-full 
                    -right-36 -top-16 md:-right-28 md:-top-28">
                </div>
                <div class="down-shape absolute z-0 w-40 h-40  bg-gradient-to-r from-[#264653]  to-[#287271] rounded-full 
                    -left-32 -bottom-32 md:-left-32 md:-bottom-32">
                </div>
                <div class="relative mx-auto z-10 bg-white rounded-xl shadow-lg p-4 hover:shadow-xl">
                    <form action="" class="flex flex-col space-y-4 h-full text-gray-600">
                        <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0 ">
                            <input type="text" placeholder="Nome" class="block w-full border-gray-300 placeholder-gray-400 rounded-md 
                                    focus:ring-4 focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75 " />
                            <input type="tel" placeholder="Telefone" class="block w-full border-gray-300 placeholder-gray-400 rounded-md 
                                    focus:ring-4 focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" />
                        </div>
                        <div class="email">
                            <input type="email" placeholder="Email" class="block w-full border-gray-300 placeholder-gray-400 rounded-md 
                                    focus:ring-4 focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" />
                        </div>
                        <div class="subject">
                            <input type="text" placeholder="Assunto" class="block w-full border-gray-300 placeholder-gray-400 rounded-md 
                                    focus:ring-4 focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" />
                        </div>
                        <div class="message">
                            <textarea name="" placeholder="Mensagem" rows="11" class="block w-full border-gray-300 placeholder-gray-400 rounded-md 
                                    focus:ring-4 focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75">
                            </textarea>
                        </div>
                        <div class="flex justify-end">
                            <x-buttons.button> Enviar</x-buttons.button>
                        </div>
                    </form>
                </div>
            </section>
            --}}
        </div>
    </div>
</x-guestLayout>