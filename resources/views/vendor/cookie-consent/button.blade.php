<form action="{!! $url !!}" {!! $attributes !!}>
    @csrf
    <button type="submit" class="!bg-black !rounded-none {!! $basename !!}__link">
        <span class="{!! $basename !!}__label">{{ $label }}</span>
    </button>
</form>
