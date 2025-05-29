@props(['name', 'prefix' => null])

<label class="input input-bordered w-full bg-slate-700">
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
