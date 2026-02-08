@props(['name'])

<div>
    @error($name)
        {{ $message }}
    @enderror
</div>
