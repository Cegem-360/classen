 @props(['collections' => []])
 <div class="mx-12 my-16 w-3/4">
     <h1 class="text-3xl font-bold uppercase">Kollekció</h1>

     <!-- gap -->
     <div class="min-h-[60px]"></div>
     @foreach ($collections as $head => $items)
         <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
         <h2 class="mb-3 text-2xl uppercase">{{ __($head) }}</h2>
         {{-- title = tag value --}}
         <ul class="products-list grid grid-cols-3 gap-4 md:grid-cols-2 sm:grid-cols-1">
             @foreach ($items as $item)
                 <x-collections.partials.collection-item :category=$item />
             @endforeach
         </ul>
     @endforeach
 </div>
