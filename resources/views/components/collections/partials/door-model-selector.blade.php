   @props(['category' => ''])
   <div class="mx-8 grid grid-cols-2 gap-3">
       <div class="swiper door-model-swiper lightbox w-full">
           <div class="swiper-wrapper p-12 bg-neutral-200">
               <div class="swiper-slide !flex justify-center sm:w-full">
                   <a data-pswp-width="540" data-pswp-height="1200" href="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m1.jpg') }}" itemprop="contentUrl" target="_blank">
                       <img class="max-h-[500px]" src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m1.jpg') }}" />
                   </a>
               </div>
               <div class="swiper-slide !flex justify-center sm:w-full">
                   <a data-pswp-width="540" data-pswp-height="1200" href="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m2.jpg') }}" itemprop="contentUrl" target="_blank">
                       <img class="max-h-[500px]" src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m2.jpg') }}" />
                   </a>
               </div>
               <div class="swiper-slide !flex justify-center sm:w-full">
                   <a data-pswp-width="540" data-pswp-height="1200" href="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m3.jpg') }}" itemprop="contentUrl" target="_blank">
                       <img class="max-h-[500px]" src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m3.jpg') }}" />
                   </a>
               </div>
               <div class="swiper-slide !flex justify-center sm:w-full">
                   <a data-pswp-width="540" data-pswp-height="1200" href="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m4.jpg') }}" itemprop="contentUrl" target="_blank">
                       <img class="max-h-[500px]" src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m4.jpg') }}" />
                   </a>
               </div>
               <div class="swiper-slide !flex justify-center sm:w-full">
                   <a data-pswp-width="540" data-pswp-height="1200" href="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m5.jpg') }}" itemprop="contentUrl" target="_blank">
                       <img class="max-h-[500px]" src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m5.jpg') }}" />
                   </a>
               </div>
               <div class="swiper-slide !flex justify-center sm:w-full">
                   <a data-pswp-width="540" data-pswp-height="1200" href="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m6.jpg') }}" itemprop="contentUrl" target="_blank">
                       <img class="max-h-[500px]" src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m6.jpg') }}" />
                   </a>
               </div>
           </div>
       </div>
       <div>
           <div class="mb-12 pl-8">
               <h2 class="mb-3 text-4xl font-bold">modell 1</h2>
               <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
               <h3 class="mb-3 text-lg">Kollekció: <span class="font-bold">{{ $category->name }}</span></h3>
           </div>
           <div class="swiper door-model-swiper-thumbs w-full" thumbsSlider="">
               <div class="swiper-wrapper flex-wrap">
                   <div class="swiper-slide p-6 pb-2 bg-neutral-200">
                       <img src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m1.jpg') }}" />
                       <div class="desc pt-2 w-full">Model1</div>
                   </div>
                   <div class="swiper-slide p-6 pb-2 bg-neutral-200">
                       <img src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m2.jpg') }}" />
                       <div class="desc pt-2 w-full">Model1</div>
                   </div>
                   <div class="swiper-slide p-6 pb-2 bg-neutral-200">
                       <img src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m3.jpg') }}" />
                       <div class="desc pt-2 w-full">Model1</div>
                   </div>
                   <div class="swiper-slide p-6 pb-2 bg-neutral-200">
                       <img src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m4.jpg') }}" />
                       <div class="desc pt-2 w-full">Model1</div>
                   </div>
                   <div class="swiper-slide p-6 pb-2 bg-neutral-200">
                       <img src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m5.jpg') }}" />
                       <div class="desc pt-2 w-full">Model1</div>
                   </div>
                   <div class="swiper-slide p-6 pb-2 bg-neutral-200">
                       <img src="{{ Vite::asset('resources/img/prd-images/ajtok/models/glas_m6.jpg') }}" />
                       <div class="desc pt-2 w-full">Model1</div>
                   </div>
               </div>
           </div>
       </div>
   </div>
