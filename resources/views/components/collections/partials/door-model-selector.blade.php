   @props(['category' => '', 'modelVariants' => [], 'door' => ''])
   <div class="mx-8 grid grid-cols-2 gap-3 md:grid-cols-1">
       <div class="door-model-swiper w-full">
           <div class="bg-neutral-200 p-12">
               <div class="!flex justify-center sm:w-full">
                   <img class="max-h-[500px]"
                       src="{{ $door->img_url ?? Vite::asset('resources/img/placeholder.webp') }}" />
               </div>
           </div>
       </div>
       <div class="">
           <div class="mb-6 pl-8">
               <h2 class="mb-3 text-4xl font-bold">{{ $door->name }}</h2>
               <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
               <h3 class="mb-3 text-lg">{{ __('Collection: ') }}
                   <a class="font-bold hover:text-red-500"
                       href="{{ route('category.show', ['category' => $category->name]) }}" wire:navigate>
                       {{ $category->name }}
                   </a>

               </h3>

               <livewire:request-quotation-button :door='$door' />
           </div>
           <div class="swiper door-model-thumbs-swiper w-full" thumbsSlider="">
               <div class="swiper-wrapper grid grid-cols-4 gap-3">
                   @foreach ($modelVariants as $model)
                       <div class="swiper-slide bg-neutral-200 p-6 pb-2">
                           <a class="group" href="{{ route('door.show', ['door' => $model->id]) }}" wire:navigate>
                               <img class="group-hover:shadow-lg group-hover:scale-105 origin-bottom transition-all duration-700 ease-in-out"
                                   src="{{ $model->img_url ?? Vite::asset('resources/img/placeholder.webp') }}" />
                           </a>
                           <div class="desc w-full min-h-20 pt-2">{{ $model->name }}</div>
                       </div>
                   @endforeach
               </div>
           </div>
           <!-- Nav PREV / NEXT -->
           <div class="col-span-full w-full flex items-center justify-end gap-2 py-4">
               <div class="door-model-thumbs-swiper-button-prev cursor-pointer">
                   <x-svg.arrow-left class="fill:rgb(var(--color-szurke));fill-rule:nonzero;" />
               </div>
               <div class="door-model-thumbs-swiper-button-next cursor-pointer">
                   <x-svg.arrow-right class="fill:rgb(var(--color-szurke));fill-rule:nonzero;" />
               </div>
           </div>
       </div>

       <script>
           document.addEventListener('livewire:navigated', () => {
               var swiper = new Swiper('.door-model-thumbs-swiper', {
                   slidesPerView: 1,
                   /* autoplay: {
                       delay: 2500,
                   }, */
                   spaceBetween: 30,
                   allowTouchMove: true,
                   touchStartPreventDefault: false,
                   loop: true,
                   pagination: {
                       el: '.door-model-thumbs-swiper-pagination',
                       clickable: true,
                   },
                   navigation: {
                       nextEl: '.door-model-thumbs-swiper-button-next',
                       prevEl: '.door-model-thumbs-swiper-button-prev',
                   },
                   breakpoints: {
                       976: {
                           slidesPerView: 4,
                           spaceBetween: 30,
                       },
                       768: {
                           slidesPerView: 3,
                           spaceBetween: 30,
                       },
                       560: {
                           slidesPerView: 2,
                           spaceBetween: 20,
                       },
                       380: {
                           slidesPerView: 1,
                           spaceBetween: 20,
                       },
                   },
               });
           });
       </script>
   </div>
