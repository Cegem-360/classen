<div>
    <form wire:submit='addToQuotation'>
        @csrf
        <button
            class="inline-flex items-center px-6 py-3 mt-6 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent w-fit hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900"
            type="submit">{{ $door->category->name }} - {{ $door->name }} {{ __('Add to Request a Quote') }}
        </button>
    </form>
</div>
