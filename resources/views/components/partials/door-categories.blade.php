    <div class="text-white">
        <div class="relative z-10 -mt-8 flex w-3/4 bg-szurke py-6 md:w-full md:flex-wrap">
            <div class="mr-6 w-1/4 border-r-1 px-6 py-2 md:mr-0 md:w-1/2 md:px-12">
                <a href="./kollekciok#">
                    <img src="{{ Vite::asset('resources/img/icons/1-belteri-ajtok.svg') }}" alt="belteri-ajtok">
                    <h3 class="mt-4">Beltéri ajtók</h3>
                </a>
            </div>
            <div class="mr-6 w-1/4 border-r-1 px-6 py-2 md:mr-0 md:w-1/2 md:border-r-0 md:px-12">
                <a href="./kollekciok#">
                    <img src="{{ Vite::asset('resources/img/icons/2-bejarati-ajtok.svg') }}" alt="belteri-ajtok">
                    <h3 class="mt-4">Enteriőrbe illő <br>bejárati ajtók</h3>
                </a>
            </div>
            <div class="mr-6 w-1/4 border-r-1 px-6 py-2 md:mr-0 md:w-1/2 md:px-12">
                <a href="./kollekciok#">
                    <img src="{{ Vite::asset('resources/img/icons/3-muszaki-ajtok.svg') }}" alt="belteri-ajtok">
                    <h3 class="mt-4">Műszaki ajtók</h3>
                </a>
            </div>
            <div class="w-1/4 px-6 py-2 md:w-1/2 md:px-12">
                <a href="{{ route('category.tech') }}" wire:navigate>
                    <img src="{{ Vite::asset('resources/img/icons/4-toloajtok.svg') }}" alt="belteri-ajtok">
                    <h3 class="mt-4">Tolóajtók</h3>
                </a>
            </div>
        </div>
    </div>
