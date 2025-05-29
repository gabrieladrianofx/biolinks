<x-layout.app>
    <x-container>
        <div class="w-2/3 space-y-4 text-center">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <div class="text-2xl font-bold tracking-wider">{{ $user->name }}</div>
            <div class="mb-6 text-sm italic opacity-80">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($user->links as $link)
                    <li class="gap flex items-center justify-center gap-2">
                        <x-button href="{{ $link->link }}" wide outline info target="_blank">
                            {{ $link->name }}
                        </x-button>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
