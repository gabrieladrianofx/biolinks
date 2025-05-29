@props(['title' => null, 'actions' => null])

<div class="card bg-base-300 w-2/3 shadow-xl">
    <div class="card-body">
        @if ($title)
            <div class="card-title mb-4 text-slate-900">{{ $title }}</div>
        @endif

        {{ $slot }}

        @if ($actions)
            <div class="card-actions mt-6 flex items-center justify-between">
                {{ $actions }}
            </div>
        @endif
    </div>
</div>
