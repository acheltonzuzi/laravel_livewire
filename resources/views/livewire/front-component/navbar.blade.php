<div>
    <header class="w-full p-5 bg-black text-white flex justify-between items-center">
        <a href="/" class="">logo</a>
        <nav>
            <ul class="flex gap-3 items-center">
                <li><a href="/" wire:navigate class="hover:text-yellow-300">Inicio</a></li>
                <li><a href="" wire:navigate class="hover:text-yellow-300">Sobre</a></li>
                @auth
                    <li><a href="{{route('dashboard')}}" wire:navigate class="hover:text-yellow-300">Dashboard</a></li>
                    <li><a href="{{route('logout')}}" wire:navigate class="hover:text-yellow-300">Sair</a></li>
                @endauth

                @guest
                <li><a href="{{route('login')}}" wire:navigate class="hover:text-yellow-300">Login</a></li>
                <li><a href="{{route('register')}}" wire:navigate class="hover:text-white border border-white inline-block p-2 hover:bg-orange-400">Criar conta</a></li>
                    
                @endguest
            </ul>
        </nav>
    </header>
</div>
