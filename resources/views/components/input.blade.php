@props(['name'])

<div>
    <input class="input input-bordered" name="{{ $name }}" {{ $attributes }} />
    @error($name)
        <div class="text-error text-sm">
            {{ $message }}
        </div>
    @enderror
</div>
