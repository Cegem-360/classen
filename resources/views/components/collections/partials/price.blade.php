@use('Illuminate\Support\Number')
<span> {{ Number::currency(intval($slot->__toString()), in: 'HUF', locale: 'hu') }} Ft</span>
