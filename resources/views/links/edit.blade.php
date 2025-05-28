<x-layout.app>
    <div>
        {{ auth()->id() }}
        <h1>Editar um link :: {{ $link->id }}</h1>

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>
        @endif


        <form action="{{ route('links.edit', $link) }}" method="post">
            @csrf
            @method('PUT')

            <div>
                <div>
                    <input name="link" placeholder="Link" value="{{ old('link', $link->link) }}">
                </div>
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <div>
                    <input name="name" placeholder="Name" value="{{ old('name', $link->name) }}">
                </div>
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>

            <a href="{{ route('dashboard') }}">Cancelar</a>
            <button>Salvar</button>
        </form>
    </div>

</x-layout.app>
