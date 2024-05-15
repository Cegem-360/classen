<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description"
            content="Lépjen kapcsolatba az Arcadia98 Kft.-vel! Itt megtalálja elérhetőségeinket, hogy kérdéseivel és megkereséseivel fordulhasson hozzánk.">
        <meta name="keywords" content="kapcsolat, elérhetőség, Arcadia98 Kft., üzenetküldés">
        <title>Kapcsolat - Arcadia98 Kft.</title>
    </x-slot>
    <x-nav.breadcrumb>
        Kapcsolat
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d696.4357209998491!2d19.144179539278472!3d47.438597061166014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741c28e0c6156ad%3A0x483308919466b45b!2sARCADIA%2098%20Kft.!5e0!3m2!1shu!2shu!4v1709888363925!5m2!1shu!2shu"
        style="border:0;" width="100%" height="450px" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="min-h-[60px]"></div>

    <div class="mx-16">
        <div class="mb-16 md:mx-8 sm:mx-4">
            <h2 class="mb-3 text-4xl font-bold">Kapcsolat</h2>
            <hr class="relative w-32 h-1 mt-3 mb-3 border-0 bg-sarga">
        </div>
        <div class="grid grid-cols-2 gap-12 max-w-7xl sm:grid-cols-1">
            <div class="">
                <h3 class="mb-3 text-xl">Arcadia 98 Kft.</h3>
                <p class="mb-1">1194 Budapest, Citroën utca 4.</p>
                <p class="mb-1"><strong>Adószám: </strong>11752550-2-43</p>
                <p class="mb-1"><strong>Cégjegyzékszám: </strong>01-09-674706</p>
                <p class="mb-1"><strong>Telefon: </strong>+36 1 430 3344</p>
                <p class="mb-1"><strong>E-mail cím: </strong><a href="mailto:info@arcadia98.hu">info@arcadia98.hu</a>
                </p>
                <p><strong>Nyitva tartás: </strong><br />
                    hétfő - péntek: 7:00 - 16:00, <br />
                    szombat: 9:00 - 13:00</p>
            </div>
            <div class="">
                <form action="" method="post">
                    @csrf
                    <div class="">
                        <h3 class="mb-3 text-xl font-bold">{{ __('Írjon nekünk!') }}</h3>

                        <x-form></x-form>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[90px]"></div>

    <x-footer.layout />

</x-layouts.app>
