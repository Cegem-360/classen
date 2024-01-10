 @props(['collections' => []])
 <div class="mx-12 my-16 w-3/4">
     <h1 class="text-3xl font-bold uppercase">Ajtók</h1>
     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Lakkozott ajtók</h2>
     {{-- title = tag value --}}
     <ul class="products-list grid grid-cols-3 gap-4 md:grid-cols-2 sm:grid-cols-1">
         @foreach ($collections as $item)
             <x-collections.partials.collection-item :category=$item />
         @endforeach
     </ul>
     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Keretezett ajtók</h2>
     <x-doors.partials.ajtok-lista-keretezett-ajtok />

     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Furnér ajtók</h2>
     <x-doors.partials.ajtok-lista-furner-ajtok />

     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Bejárati ajtók</h2>
     <x-doors.partials.ajtok-lista-bejarati-ajtok />

     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Műszaki ajtók</h2>
     <x-doors.partials.ajtok-lista-muszaki-ajtok />

     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Tolóajtók</h2>
     <x-doors.partials.ajtok-lista-tolo-ajtok />

     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Tűzbiztos ajtók</h2>
     <x-doors.partials.ajtok-lista-tuzbiztos-ajtok />

     <!-- gap -->
     <div class="min-h-[120px]"></div>

     <h1 class="text-3xl font-bold uppercase">Ajtó keretek</h1>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Fa ajtó keretek</h2>
     <x-doors.partials.ajtok-lista-fa-ajto-keretek />

     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Acél ajtó keretek</h2>
     <x-doors.partials.ajtok-lista-acel-ajto-keretek />

     <!-- gap -->
     <div class="min-h-[60px]"></div>

     <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
     <h2 class="mb-3 text-2xl uppercase">Beltéri és tűzálló ajtó keretek</h2>
     <x-doors.partials.ajtok-lista-belteri-ajto-keretek />
 </div>
