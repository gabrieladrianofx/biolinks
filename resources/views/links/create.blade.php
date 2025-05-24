<div>
    {{ auth()->id() }}
    <h1>Criar novo link</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('links.create') }}" method="post">
        @csrf

        <div>
            <div>
                <input name="link" placeholder="Link" value="{{ old('link') }}">
            </div>
            @error('link')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <div>
                <input name="name" placeholder="Name" value="{{ old('name') }}">
            </div>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>

        <button>Criar</button>
    </form>
</div>
