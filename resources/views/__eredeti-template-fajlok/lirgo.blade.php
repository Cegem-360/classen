<x-app-layout>

    <nav class="px-8 py-8">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
                <a href="/" itemprop="item" class="home">Főoldal</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="/ajtok/" itemprop="item">Ajtók</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="/lakkozott-ajtok/" itemprop="item">Lakkozott ajtók</a>
            </li>
            <li class="breadcrumbs__item">
                <strong>Lirgo</strong>
            </li>
        </ul>
    </nav>

    <div class="grid grid-cols-[3fr_1fr_2fr] gap-3 mx-8">
        <div class="swiper detail-page-swiper lightbox w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-3/4 sm:w-full min-h-[380px] bg-cover bg-center" style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/prd-images/classen_lirgo-800x550.jpg') }}');">
                    <a itemprop="contentUrl" href="{{ Vite::asset('resources/img/prd-images/classen_lirgo-800x550.jpg') }}" data-pswp-width="1600" data-pswp-height="900" target="_blank">
                        <div class="w-full h-full bg-[#ffffff00]"></div>
                    </a>
                </div>
                <div class="swiper-slide w-3/4 sm:w-full min-h-[380px] bg-cover bg-center" style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/prd-images/Lirgo-czarny-9005-800x550.jpg') }}');">
                    <a itemprop="contentUrl" href="{{ Vite::asset('resources/img/prd-images/Lirgo-czarny-9005-800x550.jpg') }}" data-pswp-width="1600" data-pswp-height="900" target="_blank">
                    <div class="w-full h-full bg-[#ffffff00]"></div>
                </a>
                </div>
            </div>
        </div>
        <div thumbsSlider="" class="swiper detail-page-swiper-thumbs w-full">
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
            <hr class="relative mt-3 mb-3 w-32 h-1 border-0 bg-sarga">
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="door-model__section catalog-icons mx-8">
        <ul class="grid grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-6">
            <li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/szerokosc_2_szkrzydlowe.png" alt="">
                <span>Kétszárnyú ajtók</span>
                <span class="jsTooltipBig" data-qtip-title="Double leaf doors" data-qtip-text="A type of door used for very wide door openings. Depending on the collection and purpose, the total width of both leaves from 120 to 200 cm is used. Active and passive leaf available only in rebated version. Next to this icon, you will always find the range of available widths for the selected collection." data-hasqtip="0" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/przesuwne_2_szkrzydlowe.png" alt="">
                <span>Kétszárnyú tolóajtók</span>
                <span class="jsTooltipBig" data-qtip-title="Double leaf sliding doors" data-qtip-text="Two door leaves used in case of very wide door openings. There are two types of sliding systems available, so you can choose the one that suits your needs and interior design - either the on-wall or the pocket door system. Sliding doors are only available with a straight, non-rebated edge." data-hasqtip="1" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/przylga_b.png" alt="">
                <span>Kemény él B</span>
                <span class="jsTooltipBig" data-qtip-title="Hard Edge B" data-qtip-text="A straight edge of a non-rebated door, timeless, aesthetic and durable. This solution increases the visual value, because the door creates a uniform surface with the door frame." data-hasqtip="2" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/przylga_k.png" alt="">
                <span>Kemény él K</span>
                <span class="jsTooltipBig" data-qtip-title="Hard Edge K" data-qtip-text="Widely used, aesthetically executed edge with K rebate profile is a standard finishing of a door leaf edge. An edge with K profile is stylish and always in fashion." data-hasqtip="3" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/wypelnienie_plaster_miodu.png" alt="">
                <span>Méhsejtes</span>
                <span class="jsTooltipBig" data-qtip-title="Honeycomb" data-qtip-text="It is a highly specialized cardboard with a construction and structure similar to a honeycomb, used as a standard stabilizing filling between construction / peripheral frame of a door leaf." data-hasqtip="4" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/wykonczenie_lakier_pu.png" alt="">
                <span>PU lakk</span>
                <span class="jsTooltipBig" data-qtip-title="PU lacquer" data-qtip-text="Smooth satin HDF surface coated with polyurethane lacquer. Our standard offer includes collections in RAL 7004 gray and RAL 9005 black. Other colours from the RAL palette are available only in this lacquer quality." data-hasqtip="5" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/paleta_ral.png" alt="">
                <span>RAL színpaletta</span>
                <span class="jsTooltipBig" data-qtip-title="RAL palette colours" data-qtip-text="A possibility to finish the door in colours from the RAL palette as an extra-cost option. Minimum order quantity - 3 sets (door leaf + door frame). All collections in RAL are finished in polyurethane
    lacquer quality." data-hasqtip="6" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/szerokosc_1_szkrzydlowe.png" alt="">
                <span>Egyszárnyú ajtók</span>
                <span class="jsTooltipBig" data-qtip-title="Single leaf doors" data-qtip-text="The most frequently chosen type of doors, commonly used in construction. Depending on the collection and purpose, leaves with the width from 60 to 120 cm are used. Next to this icon, you will always find the range of available widths for the selected collection." data-hasqtip="7" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/przesuwne_1_szkrzydlowe.png" alt="">
                <span>Egyszárnyú tolóajtók</span>
                <span class="jsTooltipBig" data-qtip-title="Single leaf sliding doors" data-qtip-text="To open this door leaf, you need to slide it along a wall, it can also disappear completely into the wall cavity. There are several types of sliding systems available, so you can choose the one that suits your needs and interior design. Sliding doors are only available with a straight, non-rebated edge." data-hasqtip="8" aria-describedby="qtip-0">
                </span></li><li class="catalog-icons__item">
                <img src="https://classen.pl/app/themes/classen/img/icons/catalog/wykonczenie_lakier_uv_pure.png" alt="">
                <span>UV tiszta lakk</span>
                <span class="jsTooltipBig" data-qtip-title="UV Pure lacquer" data-qtip-text="HDF surface coated with eco-friendly lacquer and polyurethane primer, which creates a velvety smooth surface of the door leaf. Standard white Lac colour is an equivalent of RAL 9003." data-hasqtip="9" aria-describedby="qtip-0">
                </span></li>    </ul>
    </div>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <!-- Ajtó specifikációk -->
    <div class="mx-8">
        <h2 class="mb-3 text-4xl font-bold">Ajtó specifikációk</h2>
        <hr class="relative mt-3 mb-3 w-32 h-1 border-0 bg-sarga">
        <div class="min-h-[30px]"></div>

        <div class="grid grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-8">
            <div class="properties__box">
                <article class="property">
                    <p class="mb-3"><strong>Végrehajtási szabvány</strong></p>
                    <ul class="mb-3 list-disc list-inside">
                        <li>MDF lemezből készült perifériakeret, stabilizáló "méhsejt" maggal</li>
                    </ul>
                    <p class="mb-3"><strong>Domború ajtólap:</strong></p>
                    <ul class="mb-3 pl-4 list-disc list-outside">
                        <li>két ezüst csavaros csuklópánt</li>
                        <li>zár: kulcsos zár / fürdőszobazár / hengerzár / átjáró zár</li>
                    </ul>
                    <p class="mb-3"><strong>Nem domború ajtólap:</strong></p>
                    <ul class="mb-3 pl-4 list-disc list-outside">
                        <li>két nyílás 3D rejtett zsanérokhoz</li>
                        <li>mágneses zár: kulcsos zár / fürdőszobazár / hengerzár / átjáró zár</li>
                    </ul>
                </article>
            </div>
            <div class="properties__box">
                <article class="property">
                    <p class="mb-3"><strong>Dedikált ajtókeretek</strong></p>
                    <p class="mb-3"><strong>Kemény perem K:</strong></p>
                    <ul class="mb-3 pl-4 list-disc list-outside">
                        <li>UV fehér lakkozott és PU fekete, szürke lakkozott</li>
                    </ul>
                    <p class="mb-3"><strong>Kemény perem B:</strong></p>
                    <ul class="mb-3 pl-4 list-disc list-outside">
                        <li>nem redőzött, állítható ajtókeret, UV fehér lakkozott és PU fekete, szürke lakkozott</li>
                    </ul>
                </article>
            </div>
            <div class="properties__box">
                <article class="property">
                    <p class="mb-3"><strong>Megjegyzés:</strong></p>
                    <p>Minimális rendelési mennyiség a szürke és fekete modellek esetében - 2 készlet (ajtólap + ajtókeret).</p>
                </article>
            </div>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <!-- Technikai paraméterek -->
    <div class="bg-neutral-200">
        <div class="mx-8 py-12">
            <h2 class="mb-3 text-4xl font-bold">Technikai paraméterek</h2>
            <hr class="relative mt-3 mb-3 w-32 h-1 border-0 bg-sarga">
            <div class="min-h-[30px]"></div>

            <div class="grid grid-cols-2 sm:grid-cols-1 gap-8">
                <div class="properties__box">
                    <article class="property">
                        <header class="property__header">
                            <h3>Variációk</h3>
                        </header>
                        <ul class="property__list">
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Egyszárnyú
                                    </div>
                                    <div class="property__value">
                                        60'-90'
                                    </div>
                                </div>
                            </li>
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Kétszárnyú (szinkron)
                                    </div>
                                    <div class="property__value">
                                        120' / 140' / 160' / 180'
                                    </div>
                                </div>
                            </li>
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Egy- és kétszárnyú tolórendszer
                                    </div>
                                    <div class="property__value">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="properties__box">
                    <article class="property">
                        <header class="property__header">
                            <h3>Nem visszacsapódó ajtó részletek</h3>
                        </header>
                        <ul class="property__list">
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        3D csuklópánt
                                    </div>
                                    <div class="property__value">
                                    </div>
                                </div>
                                <span class="property__desc_icon jsTooltipBig" data-qtip-title="3D Hinge" data-qtip-img="/upload/2017/09/zawias.jpg" data-qtip-text="" data-hasqtip="10">
                                    <i class="icon-info"></i>
                                </span>
                            </li>
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Mágneses zár
                                    </div>
                                    <div class="property__value">
                                    </div>
                                </div>
                                <span class="property__desc_icon jsTooltipBig" data-qtip-title="Magnetic lock" data-qtip-img="/upload/2017/09/zamek.jpg" data-qtip-text="" data-hasqtip="11">
                                    <i class="icon-info"></i>
                                </span>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
        <div class="mx-8 py-12">
            <h2 class="mb-3 text-4xl font-bold">További lehetőségek</h2>
            <hr class="relative mt-3 mb-3 w-32 h-1 border-0 bg-sarga">
            <div class="min-h-[30px]"></div>

            <div class="grid grid-cols-2 sm:grid-cols-1 gap-8">
                <div class="properties__box">
                    <article class="property">
                        <header class="property__header">
                            <h3>Szellőzés</h3>
                        </header>
                        <ul class="property__list">
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Szellőzés alulvágás</div>
                                    <div class="property__value">
                                    </div>
                                </div>
                            </li>
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Szellőzés alulvágás 15mm (rekuperáció)
                                    </div>
                                    <div class="property__value">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="properties__box">
                    <article class="property">
                        <header class="property__header">
                            <h3>Építés</h3>
                        </header>
                        <ul class="property__list">
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Harmadik zsanér (kemény prem k)</div>
                                    <div class="property__value">
                                    </div>
                                </div>
                                <span class="property__desc_icon jsTooltipBig" data-qtip-title="3D Hinge" data-qtip-img="/upload/2017/09/zawias.jpg" data-qtip-text="" data-hasqtip="10">
                                    <i class="icon-info"></i>
                                </span>
                            </li>
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Nem visszahajlított ajtólap</div>
                                    <div class="property__value">
                                    </div>
                                </div>
                                <span class="property__desc_icon jsTooltipBig" data-qtip-title="Magnetic lock" data-qtip-img="/upload/2017/09/zamek.jpg" data-qtip-text="" data-hasqtip="11">
                                    <i class="icon-info"></i>
                                </span>
                            </li>
                            <li class="property__item">
                                <div class="property__inner">
                                    <div class="property__name">
                                        Csúszó és passzív ajtólap</div>
                                    <div class="property__value">
                                    </div>
                                </div>
                                <span class="property__desc_icon jsTooltipBig" data-qtip-title="Magnetic lock" data-qtip-img="/upload/2017/09/zamek.jpg" data-qtip-text="" data-hasqtip="11">
                                    <i class="icon-info"></i>
                                </span>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <!-- Ajtó specifikációk -->
    <div class="mx-8">
        <h2 class="mb-3 text-4xl font-bold">Elérhető opciók</h2>
        <hr class="relative mt-3 mb-3 w-32 h-1 border-0 bg-sarga">
        <div class="min-h-[30px]"></div>

        <div class="grid grid-cols-2 sm:grid-cols-1 gap-8 bg-neutral-100">
            <div class="doors__col doors__colors p-4 bg-neutral-200">
                <h3 class="doors__subheader text-2xl font-bold">
                    <strong class="text-sarga text-4xl">1.</strong> Válassza ki a felület színét</h3>
                <div class="swiper door-fronts-swiper-thumbs door_colors">
                    <div class="swiper-wrapper md:flex-col items-center min-h-[330px]">
                        <div class="swiper-slide door_color p-3">
                            <div class="door_color__wrapper">
                                <div class="door_color__image">
                                    <img src="{{ Vite::asset('resources/img/prd-images/feluletek/iridium-bialy-mat-170x126.jpg') }}" alt="White">
                                </div>
                                <div class="door_color__meta mt-3">
                                    <h4>White</h4>
                                    <p class="text-sm font-bold">Lacquered</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide door_color p-3">
                            <div class="door_color__wrapper">
                                <div class="door_color__image">
                                    <img src="{{ Vite::asset('resources/img/prd-images/feluletek/szary-7004-170x126.jpg') }}" alt="Gray 7004">
                                </div>
                                <div class="door_color__meta mt-3">
                                    <h4>Gray 7004</h4>
                                    <p class="text-sm font-bold">Lacquered</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide door_color p-3">
                            <div class="door_color__wrapper">
                                <div class="door_color__image">
                                    <img src="{{ Vite::asset('resources/img/prd-images/feluletek/czarny-9005-170x126.jpg') }}" alt="Black 9005">
                                </div>
                                <div class="door_color__meta mt-3">
                                    <h4>Black 9005</h4>
                                    <p class="text-sm font-bold">Lacquered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doors__col doors__fronts p-4" id="doors__fronts">
                <h3 class="doors__subheader text-2xl font-bold">
                <strong class="text-sarga text-4xl">2.</strong> Ellenőrizze a modellt</h3>
                <div class="door_fronts">
                    <div class="swiper lightbox door-fronts-swiper w-full">
                        <div class="swiper-wrapper items-center">
                            <div class="swiper-slide">
                                <a itemprop="contentUrl" href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}" data-pswp-width="1600" data-pswp-height="900" target="_blank">
                                    <div class="w-full h-full flex justify-center bg-[#ffffff00]">
                                        <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a itemprop="contentUrl" href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}" data-pswp-width="1600" data-pswp-height="900" target="_blank">
                                    <div class="w-full h-full flex justify-center bg-[#ffffff00]">
                                        <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                            <a itemprop="contentUrl" href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}" data-pswp-width="1600" data-pswp-height="900" target="_blank">
                                <div class="w-full h-full flex justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>            </div>
        </div>
    </div>
    <x-footer.layout />

</x-app-layout>
