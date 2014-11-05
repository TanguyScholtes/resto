<div class="header-container">
    <header class="wrapper clearfix">
        <h1 class="title">{{ link_to_route('home', 'RestoRallye') }}<!--<span>La nouvelle vague gastronomique</span>--></h1>
        <nav>
            <ul>
                <li>{{ link_to_route('home', 'Accueil') }}</li>
                <li>{{ link_to_route('register', 'Inscription') }}</li>
                <li>{{ link_to_route('about', 'À propos') }}</li>
                <li>
                    @unless(Auth::check())
                        {{ link_to_route('login', 'Se connecter') }}
                    @endunless
                     @if(Auth::check())
                         {{ link_to_route('logout', 'Se déconnecter') }}
                    @endif
                 </li>
            </ul>
        </nav>
    </header>
</div>