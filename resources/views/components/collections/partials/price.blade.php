@use('Illuminate\Support\Number')
<span> {{ Number::currency(intval($slot->__toString()), locale: 'hu', precision: 0) }} Ft</span>
