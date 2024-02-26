   @props(['category' => '', 'modelVariants' => [], 'door' => ''])
   <div class="mx-8 grid grid-cols-2 gap-3 md:grid-cols-1">
       <div class="swiper door-model-swiper w-full">
           <div class="swiper-wrapper max-h-[500px] bg-neutral-200 p-12">
               @foreach ($modelVariants as $model)
                   <div class="swiper-slide !flex justify-center sm:w-full">
                       <img class="max-h-[500px]"
                           src="{{ $model->img_url ?? Vite::asset('resources/img/placeholder.webp') }}" />
                   </div>
               @endforeach
           </div>
       </div>
       <div>
           <div class="mb-6 pl-8">
               <h2 class="mb-3 text-4xl font-bold">{{ $door->name }}</h2>
               <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
               <h3 class="mb-3 text-lg">{{ __('Collection: ') }}<span class="font-bold">{{ $category->name }}</span>
               </h3>
               <form action="{{ route('quotation.add', ['door' => $door->id]) }}" method="post">
                   @csrf
                   <x-primary-button class="mt-6 w-fit"
                       type="submit">{{ __('Add to Request a Quote') }}</x-primary-button>
               </form>
           </div>
           <div class="swiper door-model-swiper-thumbs w-full" thumbsSlider="">
               <div class="swiper-wrapper flex-wrap">
                   @foreach ($modelVariants as $model)
                       <div class="swiper-slide bg-neutral-200 p-6 pb-2">
                           <img src="{{ $model->img_url ?? Vite::asset('resources/img/placeholder.webp') }}" />
                           <div class="desc w-full pt-2">{{ $model->name }}</div>
                       </div>
                   @endforeach
               </div>
           </div>
       </div>
   </div>
