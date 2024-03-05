@use('Illuminate\Support\Number')
<span> {{ Number::currency(intval($slot->__toString()), locale: 'huf') }} Ft</span>
