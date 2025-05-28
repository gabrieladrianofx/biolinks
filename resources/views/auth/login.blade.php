<x-layout.app>
    <div class="mx-auto flex max-w-screen-md items-center justify-center py-20">
        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h1 class="card-title">Login</h1>

                @if ($message = session()->get('message'))
                    <div>{{ $message }}</div>
                @endif

                <form action="{{ route('login') }}" method="post" id="login-form">
                    @csrf

                    <div>
                        <div>
                            <input class="input input-bordered" name="email" placeholder="Email"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="text-error text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <div>
                            <input class="input input-bordered" type="password" name="password" placeholder="Senha">
                        </div>
                        @error('password')
                            <div class="text-error text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                </form>
                <div class="card-actions">
                    <button class="btn btn-primary" type="submit" form="login-form">Logar</button>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
