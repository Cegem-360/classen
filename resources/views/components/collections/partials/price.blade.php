@use('Illuminate\Support\Number')
<span> {{ Number::currency(intval($slot->_toSring()), in: 'HUF') }} Ft</span>
