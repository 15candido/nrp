@props(['image'])
<div class="image relative w-full h-auto">
    <img src="{{asset($image)}}" class="w-full h-full object-cover inset-0">
    <div class="hidden gallery absolute justify-center items-center gap-4 right-0 top-0 p-1">
        <a href="#" class="photogallery">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-camera w-10 h-10 p-1 text-white
                hover:text-[#ff6b35] hover:p-0" viewBox="0 0 16 16">
                <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827
                    3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2
                    2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 
                    0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0
                .5.5 0 0 1 1 0z" />
            </svg>
        </a>
        <a href="#" class="videogallery">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-camera-video w-10 h-10 p-1 text-white
                hover:text-[#ff6b35] hover:p-0" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0
                    1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0
                    0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
            </svg>
        </a>
    </div>
</div>