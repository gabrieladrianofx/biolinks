<x-layout.app>
    <div>
        {{ auth()->id() }}
        <h1>Register</h1>

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>
        @endif

        <form action="{{ route('register') }}" method="post">
            @csrf

            <div>
                <div>
                    <input type="name" name="name" placeholder="Name" value="{{ old('name') }}">
                </div>
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <div>
                    <input name="email" placeholder="Email" value="{{ old('email') }}">
                </div>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <div>
                    <input name="email_confirmation" placeholder="Email Confirmation">
                </div>
            </div>

            <div>
                <div>
                    <input type="password" name="password" placeholder="Senha">
                </div>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>

            <button>Register</button>
        </form>
    </div>
</x-layout.app>
