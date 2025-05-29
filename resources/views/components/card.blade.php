@props(['title' => null, 'actions' => null])

<div class="card w-2/3 bg-slate-800 shadow-xl">
    <div class="card-body">
        @if ($title)
            <div class="card-title mb-4 text-slate-50">{{ $title }}</div>
        @endif

        {{ $slot }}

        @if ($actions)
            <div class="card-actions mt-6 flex items-center justify-between">
                {{ $actions }}
            </div>
        @endif
    </div>
</div>
