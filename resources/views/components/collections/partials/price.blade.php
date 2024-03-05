@use('Illuminate\Support\Number')
<span> {{ Number::format(intval($slot->__toString()), locale: 'hu') }} Ft</span>
