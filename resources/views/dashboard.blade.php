<x-layout.app>
    <x-container>
        <div class="space-y-4 text-center">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <div class="text-2xl font-bold tracking-wide">{{ $user->name }}</div>
            <div class="text-sm italic opacity-40">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($links as $link)
                    <li>
                        @unless ($loop->last)
                            <x-form :route="route('links.down', $link)" patch>
                                <x-button ghost>
                                    <x-icons.down class="h-6 w-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost>
                                <x-icons.down class="h-6 w-6" />
                            </x-button>
                        @endunless

                        @unless ($loop->first)
                            <x-form :route="route('links.up', $link)" patch>
                                <x-button ghost>
                                    <x-icons.up class="h-6 w-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost>
                                <x-icons.up class="h-6 w-6" />
                            </x-button>
                        @endunless

                        <x-button href="{{ route('links.edit', $link) }}" block outline info>
                            {{ $link->name }}
                        </x-button>

                        <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem Certeza?')">
                            <x-button ghost>
                                <x-icons.trash class="h-6 w-6" />
                            </x-button>
                        </x-form>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
