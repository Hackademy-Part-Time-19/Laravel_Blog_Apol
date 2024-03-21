<nav class="fill"> <!--Nav Bar-->
    <img src="/imagini/LogoSignature.png" alt="">
    <ul>
        <li><a href="{{ route('HomePage') }}">Home</a></li>
        <li><a href="{{ route('articles.index') }}">Articoli</a></li>
        <li><a href="{{ route('categories.index') }}">Modifica Categoria</a></li>
        <li><a href="{{ route('WhoIam') }}">Chi Sono</a></li>
        <li class="nav-item dropdown">
            <a href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Scegli Categoria
            </a>
            <ul style="background-color: #34353b; border: none;border-radius: 0px;margin-top: 5px;width: 50px;height: auto"
                class="dropdown-menu dropdown-menu-" aria-labelledby="navbarDarkDropdownMenuLink">
                @foreach ($categories as $category)
                    <li><a id="cavolo" class="dropdown-item"
                            href="{{ route('ArticoliPerCategoria', $category) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </li>
   
            <li><a href="{{ route('article.create') }}">Inserisci Articolo</a></li>

        <li><a href="{{ route('Contacts') }}">Contatti</a></li>
    </ul>
    <div style="padding-bottom:15px " class="Register">
        <div class="registrati">


            <div style="display: flex; align-items: center">
                @if (Auth::check('user'))
                    <span style="color: white"> Bentornato <span>
                            <a style="color: #fec86a ;text-decoration: none" href="{{ route('user.settings') }}">
                                {{ Auth::user()->name }}</a>
                        </span></span>
                    <form action="/logout" method="POST">
                        @csrf
                        <button style="background-color: rgba(255, 255, 255, 0); border: none" type="submit"
                            class="btn btn-primary"><i id="cazzo" onclick="OpenLogin()" style=" font-size: 20px;"
                                class="bi bi-box-arrow-left "></i></button>
                    </form>
                @else
                    <i id="cazzo" onclick="OpenLogin()" style=" font-size: 20px;" class="bi bi-person"></i>
                @endif
            </div>

        </div>
    </div>


</nav>
