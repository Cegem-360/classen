<x-app-layout>

    <!-- Hero Section -->
    <div class="bg-blue-500 text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Your Hero Title</h1>
            <p class="mt-4 text-lg">A brief description of your hero section.</p>
            <button class="mt-8 bg-white text-blue-500 px-4 py-2 rounded-full">Get Started</button>
        </div>
    </div>

    <!-- 3 Column Layout -->
    <div class="container mx-auto mt-8 flex flex-wrap">

        <!-- Column 1 -->
        <div class="w-full md:w-1/3 p-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Column 1</h2>
                <p>A short description or content for the first column.</p>
            </div>
        </div>

        <!-- Column 2 -->
        <div class="w-full md:w-1/3 p-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Column 2</h2>
                <p>A short description or content for the second column.</p>
            </div>
        </div>

        <!-- Column 3 -->
        <div class="w-full md:w-1/3 p-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Column 3</h2>
                <p>A short description or content for the third column.</p>
            </div>
        </div>

    </div>

    <div class="mx-auto h-1/2 flex items-center text-white bg-gradient-to-b from-[#978f88] to-[#c4c0bd]">

        <!-- Text Column (1/4) -->
        <div class="basis-1/4">
            <h2 class="px-6 text-4xl font-bold mb-4">STÍLUSOS TOLÓAJTÓ</h2>
            <h3 class="px-6">Klasszikus megjelenés, ezerarcú felhasználás.</h3>
            <button class="mt-8 py-2 w-full block bg-white text-blue-500">TOLÓAJTÓK</button>
        </div>

        <!-- Image Column (3/4) -->
        <div class="basis-3/4">
            <img class="object-cover h-full" src="{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}" alt="Hero Image" class="w-full h-full object-cover rounded-lg">
        </div>

    </div>

</x-app-layout>
