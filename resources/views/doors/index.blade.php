<x-layouts.app>
    <div class="flex pt-20" aria-label="Breadcrumb">
        <ol class="abj flex items-center" role="list">
            <li>
                <div>
                    <a class="axp bkx" href="#">
                        <svg class="h-5 w-5 flex-shrink" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span
                            class="border-w-0 absolute m-[-1px] h-[1px] w-[1px] flex-nowrap overflow-hidden p-0">Home</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="h-5 w-5 flex-shrink" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a class="jx awa awe axr bkz" href="#">
                        Main page
                    </a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="h-5 w-5 flex-shrink" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a class="jx awa awe axr bkz" href="#" aria-current="page">
                        Door
                    </a>
                </div>
            </li>
        </ol>
    </div>
    <div class="bg-gray-100">
        <div class="mx-auto w-full px-4 lg:px-8 sm:px-6">
            <div class="mx-auto mt-6 max-w-full lg:grid lg:grid-cols-2">
                <div class="m-y-0 mt-6">
                    <div class="group relative max-w-full">
                        <div
                            class="sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 relative h-80 w-full overflow-hidden bg-white group-hover:opacity-75 sm:h-64">
                            <h2 class="text-2xl font-bold text-gray-900">Collections</h2>
                        </div>
                    </div>

                </div>
                <div class="m-y-0 mt-6 items-end text-right">
                    <div class="group relative flex max-w-full items-end justify-end">

                        <div
                            class="sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 relative h-80 w-full items-end overflow-hidden bg-white pr-16 text-right group-hover:opacity-75 sm:h-64">
                            <a href="{{ route('category.index') }}" wire:navigate.hover>
                                <h2 class="mr-0 border-1 border-gray-1000 text-center text-2xl font-bold text-gray-900">
                                    Go to collections
                                </h2>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <x-doors.layout :products="$products" />

</x-layouts.app>
