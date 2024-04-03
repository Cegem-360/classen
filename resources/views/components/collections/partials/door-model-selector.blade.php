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
       <div>
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
           <div class="door-model-swiper-thumbs w-full" thumbsSlider="">
               <div class="grid grid-cols-4 gap-3">
                   @foreach ($modelVariants as $model)
                       <div class="bg-neutral-200 p-6 pb-2">
                           <a href="{{ route('door.show', ['door' => $model->id]) }}" wire:navigate>
                               <img src="{{ $model->img_url ?? Vite::asset('resources/img/placeholder.webp') }}" />
                           </a>
                           <div class="desc w-full pt-2">{{ $model->name }}</div>
                       </div>
                   @endforeach
               </div>
           </div>
       </div>
   </div>
