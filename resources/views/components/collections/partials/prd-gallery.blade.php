   @props(['category' => ''])
   <div class="mx-8 grid grid-cols-[3fr_1fr_2fr] gap-3 md:grid-cols-1">
       <div class="swiper detail-page-swiper lightbox w-full">
           <div class="swiper-wrapper">
               @foreach ($category->gallery_imgs as $img)
                   <div class="swiper-slide min-h-[380px] w-3/4 bg-cover bg-center sm:w-full"
                       style="background-position: 40% 50%; background-image: url('{{ !empty($img) ? $img : Vite::asset('resources/img/placeholder.webp') }}');">
                       <a data-pswp-width="1600" data-pswp-height="900"
                           href="{{ !empty($img) ? $img : Vite::asset('resources/img/placeholder.webp') }}"
                           itemprop="contentUrl" target="_blank">
                           <div class="h-full w-full bg-[#ffffff00]"></div>
                       </a>
                   </div>
               @endforeach
           </div>
       </div>
       <div class="swiper detail-page-swiper-thumbs w-full md:w-1/3" thumbsSlider="">
           <div class="swiper-wrapper !h-auto flex-wrap">
               @foreach ($category->gallery_imgs as $img)
                   <div class="swiper-slide">
                       <img loading="lazy" src=" {{ !empty($img) ? $img : Vite::asset('resources/img/placeholder.webp') }}" />
                   </div>
               @endforeach
           </div>
       </div>
       <div class="pl-8 md:order-first">
           <h2 class="mb-3 text-4xl font-bold">{{ $category->name }}</h2>
           <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
       </div>
   </div>
