@props(['name', 'prefix' => null])

<label class="input input-bordered bg-base-100 w-full">
    @if ($prefix)
        <span>{{ $prefix }}</span>
    @endif
    <input class="grow" name="{{ $name }}" {{ $attributes }} />
    @error($name)
        <div class="text-error text-sm">
            {{ $message }}
        </div>
    @enderror
</label>
