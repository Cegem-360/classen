@use('Illuminate\Support\Number')
<span> {{ Number::currency(intval($slot->__toString()), in: ' Ft', locale: 'hu', precision: 0) }} Ft</span>
