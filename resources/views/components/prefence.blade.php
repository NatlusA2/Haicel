<!-- resources/views/components/preference.blade.php -->
@php
    $checkboxes = $ids ?? [];
@endphp

@foreach($checkboxes as $id)
    <div class="prefence">
        <input type="checkbox" id="{{ $id }}">
        <label for="{{ $id }}" class="buttons"></label>
        <p>{{ $slot }}</p>
    </div>
@endforeach
