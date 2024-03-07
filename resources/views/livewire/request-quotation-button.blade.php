<div>
    <form wire:submit='addToQuotation'>
        @csrf
        <button
            class="border mt-6 inline-flex w-fit items-center border-transparent bg-gray-800 px-6 py-3 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900"
            type="submit">{{ __('Add to Request a Quote') }}
        </button>
    </form>
</div>
