<div>
    <h1>Profile</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('profile', $user) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <div>
                <input name="name" placeholder="Name" value="{{ old('name', $user->name) }}">
            </div>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <div>
                <textarea name="description" placeholder="Breve relato">{{ old('description', $user->description) }}</textarea>
            </div>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <div>
                <span>biolinks.com.br/</span>
                <input name="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}">
            </div>
            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>

        <a href="{{ route('dashboard') }}">Cancelar</a>
        <button>Atualizar</button>
    </form>
</div>
