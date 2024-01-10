   @props(['category' => ''])
   <div class="mx-8 grid grid-cols-[3fr_1fr_2fr] gap-3">
       <div class="swiper detail-page-swiper lightbox w-full">
           <div class="swiper-wrapper">
               <div class="swiper-slide min-h-[380px] w-3/4 bg-cover bg-center sm:w-full"
                   style="background-position: 40% 50%; background-image: url('{{ !empty($category->img_url) ? $category->img_url : Vite::asset('resources/img/placeholder.webp') }}');">
                   <a data-pswp-width="1600" data-pswp-height="900"
                       href="{{ !empty($category->img_url) ? $category->img_url : Vite::asset('resources/img/placeholder.webp') }} }}"
                       itemprop="contentUrl" target="_blank">
                       <div class="h-full w-full bg-[#ffffff00]"></div>
                   </a>
               </div>
               <div class="swiper-slide min-h-[380px] w-3/4 bg-cover bg-center sm:w-full"
                   style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/prd-images/Lirgo-czarny-9005-800x550.jpg') }}');">
                   <a data-pswp-width="1600" data-pswp-height="900"
                       href="{{ Vite::asset('resources/img/prd-images/Lirgo-czarny-9005-800x550.jpg') }}"
                       itemprop="contentUrl" target="_blank">
                       <div class="h-full w-full bg-[#ffffff00]"></div>
                   </a>
               </div>
           </div>
       </div>
       <div class="swiper detail-page-swiper-thumbs w-full" thumbsSlider="">
           <div class="swiper-wrapper">
               <div class="swiper-slide">
                   <img src="{{ Vite::asset('resources/img/prd-images/classen_lirgo-230x150.jpg') }}" />
               </div>
               <div class="swiper-slide">
                   <img src="{{ Vite::asset('resources/img/prd-images/Lirgo-czarny-9005-230x150.jpg') }}" />
               </div>
           </div>
       </div>
       <div class="pl-8">
           <h2 class="mb-3 text-4xl font-bold">Lirgo</h2>
           <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
       </div>
   </div>
