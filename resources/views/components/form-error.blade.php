@props(['name'])
@error($name)
    <span class="text-red-500 italic text-sm">{{ $message }}</span>
@enderror
