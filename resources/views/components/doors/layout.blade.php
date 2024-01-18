@props(['doors' => ''])

<div class="flex">
    <x-doors.partials.fillter-bar />

    <x-doors.partials.doors-list.layout :doors='$doors' />

</div>
