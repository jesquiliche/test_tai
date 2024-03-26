<div class="bg-gray-50 fixed z-10 w-full shadow-lg flex items-center justify-between">
    <div class="flex items-center mx-3">
        <a href="/" class="flex items-center">
            <img src="logo_low.png" class="h-16 w-16" alt="Logo">
            <h1 class="text-3xl font-bold italic m-4">Test tai</h1>
        </a>
    </div>

    <ul class="flex text-lg font-semibold justify-end space-x-2 p-2 items-center">
        <li class="nav-link">
            <a href="/">
                Inicio
            </a>
        </li>
        <li>
            <a href="{{ route('test') }}" class="nav-link">
                Test
            </a>
        </li>
        <li>
            <a href="{{ route('register') }}" class="nav-link">
                Registro
            </a>
        </li>
        @guest
            <li>
                <a href="{{ route('login') }}" class="nav-link">
                    Inicio sesión
                </a>
            </li>
        @endguest

        @if (auth()->check())
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                Logout -
                {{ auth()->user()->name }}
            </a>
        @endif
    </ul>
</div><!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
