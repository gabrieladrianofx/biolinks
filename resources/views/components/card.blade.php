@props(['title', 'actions'])

<div class="card w-2/3 bg-slate-800 shadow-xl">
    <div class="card-body">
        <div class="card-title mb-4 text-slate-50">{{ $title }}</div>

        {{ $slot }}

        <div class="card-actions mt-6 flex items-center justify-between">
            {{ $actions }}
        </div>
    </div>
</div>
