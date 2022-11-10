<!-- main container -->
<div class="main-content-container">
  <!-- our slogan -->
 <div class="flex flex-row w-full max-w-7xl justify-center px-5 lg:px-10">
    <div class="flex flex-wrap w-full items-center text-5xl md:text-6xl lg:text-7xl text-[#264653] 
    font-extrabold leading-normal overflow-hidden">
      <h1> A Educação é o Único Caminho</h1>
    </div>
  </div>
  <!-- a brief introduction about us  -->
  <div class="grid md:grid-cols-2 max-w-7xl justify-center gap-4 px-5 lg:px-10">
    <x-about.about :about="$abouts"/>
  </div>
  <!-- Ongoing project -->
  <x-cards.structureWithBg>
    <x-cards.info-default-card 
      title="Projetos em curso"
      description="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique dignissimos fugit iusto?
        Soluta laboriosam impedit veritatis asperiores animi accusantium qui, quia quam id provident rem modi 
        ipsum sunt quisquam ex."
    />
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center overflow-hidden">
      <x-projects.ongoing :ongoingProjects="$projects"/>
    </div>
  </x-cards.structureWithBg>

  <!-- Some of the impacts achieved over the years  -->
  <x-cards.structureWhitOutBg>
    <x-cards.info-default-card 
      title="O que já alcançamos"
      description="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique dignissimos fugit iusto?
        Soluta laboriosam impedit veritatis asperiores animi accusantium qui, quia quam id provident rem modi 
        ipsum sunt quisquam ex."
    />
    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 justify-items-center">
      <x-cards.impact :impacts="$impacts"/>
    </div>
  </x-cards.structureWhitOutBg>

  <!-- How to contribute/help in our causes  -->
  <x-cards.structureWithBg>
    <x-cards.info-default-card 
      title="Como ajudar?"
      description="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique dignissimos fugit iusto?
        Soluta laboriosam impedit veritatis asperiores animi accusantium qui, quia quam id provident rem modi 
        ipsum sunt quisquam ex."
    />
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-center items-center overflow-hidden">
      <x-help.how-to-help :howToHelp="$howToHelp"/>
    </div>
  </x-cards.structureWithBg>

  <!-- Our partners over the years -->
   <x-cards.structureWhitOutBg>
    <x-cards.info-default-card 
      title="Os nossos parceiros"
      description="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique dignissimos fugit iusto?
        Soluta laboriosam impedit veritatis asperiores animi accusantium qui, quia quam id provident rem modi 
        ipsum sunt quisquam ex."
    />
    <div class="grid grid-cols-4 gap-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 xl:grid-cols-12 justify-center
      items-center">
      <x-cards.partner :partners="$partners"/>
    </div>
  </x-cards.structureWhitOutBg>
</div>

