@use('Illuminate\Support\Number')
<span> {{ Number::currency(intval($slot), in: 'HUF') }} Ft</span>
