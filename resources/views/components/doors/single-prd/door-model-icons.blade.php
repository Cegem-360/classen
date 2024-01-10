  @props(['catalogs' => ''])
  <div class="door-model__section catalog-icons mx-8">
      <ul class="grid grid-cols-5 gap-6 md:grid-cols-3 sm:grid-cols-2">

          @foreach ($catalogs as $catalog)
              @dd($catalog)
              <x-collections.partials.attribute :catalog=$catalog />
          @endforeach

      </ul>
  </div>
