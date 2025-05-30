<x-layout.app>
    <x-container>
        <div class="absolute left-10 top-10 flex flex-col gap-4">
            <x-button ghost :href="route('profile')">Update Profile</x-button>
            <x-button ghost :href="route('links.create')">Create a new Link</x-button>
            <x-button ghost :href="route('logout')">Logout</x-button>
        </div>
        <div class="w-2/3 space-y-4 text-center">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <div class="text-2xl font-bold tracking-wider">{{ $user->name }}</div>
            <div class="mb-6 text-sm italic opacity-80">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($links as $link)
                    <li class="gap flex items-center justify-center gap-2">
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

                        <x-button href="{{ route('links.edit', $link) }}" wide outline info>
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
