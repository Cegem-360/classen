@props(['doors' => ''])

<div class="flex">
    <x-doors.partials.filter-bar />

    <x-doors.partials.doors-list.layout :doors='$doors' />

</div>
