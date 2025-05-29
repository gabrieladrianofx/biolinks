<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="form" enctype="multipart/form-data">
                <div class="flex items-center gap-3">
                    <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
                    <x-file-input name="photo" />
                </div>
                <x-input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />
                <x-textarea name="description" placeholder="Description"
                    value="{{ old('description', $user->description) }}" />
                <x-input name="handler" placeholder="Handler" prefix="biolinks.com.br/"
                    value="{{ old('handler', $user->handler) }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="form">Update link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
