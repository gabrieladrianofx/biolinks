<div>
    <h1>Dashboard</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <a href="{{ route('profile') }}">Atualizar Profile</a>
    <a href="{{ route('links.create') }}">Criar Link</a>

    <ul>
        @foreach ($links as $link)
            <li style="display:flex;">
                @unless ($loop->last)
                    <form action="{{ route('links.down', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#1f1f1f">
                                <path d="M480-80 200-360l56-56 184 183v-647h80v647l184-184 56 57L480-80Z" />
                            </svg></button>
                    </form>
                @endunless

                @unless ($loop->first)
                    <form action="{{ route('links.up', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#1f1f1f">
                                <path d="M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z" />
                            </svg></button>
                    </form>
                @endunless

                <a href="{{ route('links.edit', $link) }}">
                    {{ $link->id }} - {{ $link->name }}
                </a>

                <form action="{{ route('links.destroy', $link) }}" method="POST"
                    onsubmit="return confirm('Tem Certeza?')">
                    @csrf
                    @method('DELETE')

                    <button>Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
