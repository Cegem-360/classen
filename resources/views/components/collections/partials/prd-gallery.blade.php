   @props(['category' => ''])
   <div class="mx-8 grid grid-cols-[3fr_1fr_2fr] gap-3 md:grid-cols-1">
       <div class="w-full swiper detail-page-swiper lightbox">
           <div class="swiper-wrapper">
               @foreach ($category?->gallery_imgs as $img)
                   <div class="swiper-slide min-h-[380px] w-3/4 bg-cover bg-center sm:w-full"
                       style="background-position: 40% 50%; background-image: url('{{ !empty($img) ? $img : Vite::asset('resources/img/placeholder.webp') }}');">

                   </div>
               @endforeach
           </div>
       </div>
       <div class="w-full swiper detail-page-swiper-thumbs md:w-1/3" thumbsSlider="">
           <div class="swiper-wrapper !h-auto flex-wrap">
               @foreach ($category?->gallery_imgs as $img)
                   <div class="swiper-slide">
                       <img src=" {{ !empty($img) ? $img : Vite::asset('resources/img/placeholder.webp') }}"
                           loading="lazy" />
                   </div>
               @endforeach
           </div>
       </div>
       <div class="pl-8 md:order-first">
           <h2 class="mb-3 text-4xl font-bold">{{ __($category?->name) }}</h2>
           <hr class="relative w-32 h-1 mt-3 mb-3 border-0 bg-sarga">
           <p>
               @if (
                   $category->name != 'Adjustable door frame' &&
                       $category->name != 'Adjustable non-rebated door frame' &&
                       $category->name != 'Standard 2-Pack door frame' &&
                       $category->name != 'Single leaf and double leaf sliding system' &&
                       $category->name != 'Modi Design sliding system' &&
                       $category->name != 'Compact' &&
                       $category->name != 'Raktári ajtók')
                   <x-collections.partials.price class="block px-6 py-3 mt-6 text-lg font-bold w-fit bg-neutral-200">
                       {{ $category?->doors?->first()?->price }}
                   </x-collections.partials.price>
               @endif
           </p>
       </div>
   </div>
