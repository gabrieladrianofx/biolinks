<div>
    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>{{$message}}</div>
    @endif

    <form action="/login" method="post">
        @csrf

        <div>
            <div>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            </div>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
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

        <button>Logar</button>
    </form>
</div>