@props(['title', 'actions'])

<div class="card w-96 bg-slate-800 shadow-xl">
    <div class="card-body">
        <div class="card-title">{{ $title }}</div>

        {{ $slot }}

        <div class="card-actions">
            {{ $actions }}
        </div>
    </div>
</div>
