<div>
    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
        for="quantity-input">{{ __('Choose quantity:') }}</label>
    <div class="max-w-32 relative flex flex-wrap items-center">
        <div class="mb-6 flex">
            <button
                class="border h-11 rounded-s-lg border-gray-300 bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-0 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700"
                type="button" wire:click="decrement">
                <svg class="h-3 w-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h16" />
                </svg>
            </button>
            <input
                class="border-y focus:border form-input z-10 block h-11 w-full border-x-0 border-gray-100 bg-gray-50 py-2.5 text-center text-sm text-gray-900 focus:border-gray-300 focus:ring-0 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                id="quantity-input" data-input-counter type="text" value="{{ $quantity }}"
                aria-describedby="helper-text-explanation" wire:model.live="quantity" placeholder="999" required />
            <button
                class="border h-11 rounded-e-lg border-gray-300 bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-0 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700"
                type="button" wire:click="increment">
                <svg class="h-3 w-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 1v16M1 9h16" />
                </svg>
            </button>
        </div>
        <div class="">
            <div class="mb-2 flex">
                <input class="form-radio" id="{{ Str::slug(__('Adjustable door frame')) }}" type="radio"
                    value="{{ __('Adjustable door frame') }}" wire:model.live="frame" @selected($frame == __('Adjustable door frame'))>
                <span class="ml-3 text-xs">{{ __('Adjustable door frame') }}</span>
            </div>
            <div class="mb-2 flex">
                <input class="form-radio" id="{{ Str::slug(__('Adjustable non-rebated door frame')) }}" type="radio"
                    value="{{ __('Adjustable non-rebated door frame') }}" wire:model.live="frame"
                    @selected($frame == __('Adjustable non-rebated door frame'))>
                <span class="ml-3 text-xs">{{ __('Adjustable non-rebated door frame') }}</span>
            </div>
            <div class="mb-2 flex">
                <input class="form-radio" id="{{ Str::slug(__('Standard 2-Pack door frame')) }}" type="radio"
                    value="{{ __('Standard 2-Pack door frame') }}" wire:model.live="frame" @selected($frame == __('Standard 2-Pack door frame'))>
                <span class="ml-3 text-xs">{{ __('Standard 2-Pack door frame') }}</span>
            </div>
            <div class="mb-2 flex">
                <input class="form-radio" id="{{ Str::slug(__('Adjustable Reverse 80 door frame')) }}" type="radio"
                    value="{{ __('Adjustable Reverse 80 door frame') }}" wire:model.live="frame"
                    @selected($frame == __('Adjustable Reverse 80 door frame'))>
                <span class="ml-3 text-xs">{{ __('Adjustable Reverse 80 door frame') }}</span>
            </div>
        </div>
    </div>

</div>
