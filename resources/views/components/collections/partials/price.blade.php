@use('Illuminate\Support\Number')
<span class="{{ $class ?? '' }}"> {{ Number::format(intval($slot->__toString()), locale: 'hu') }} Ft</span>
