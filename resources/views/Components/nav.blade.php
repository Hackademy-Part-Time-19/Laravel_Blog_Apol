<nav class="fill"> <!--Nav Bar-->
    <img src="/imagini/LogoSignature.png" alt="">
    <ul>
        <li><a href="{{ route('HomePage') }}">Home</a></li>
        <li><a href="{{ route('ArticleIdex') }}">Articoli</a></li>
        <li><a href="{{ route('WhoIam') }}">Chi Sono</a></li>
        <li class="nav-item dropdown">
            <a  href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Scegli Categoria
            </a>
            <ul style="background-color: #34353b; border: none;border-radius: 0px;margin-top: 5px;width: 50px;height: auto"
                class="dropdown-menu dropdown-menu-" aria-labelledby="navbarDarkDropdownMenuLink">
                @foreach ($categories as $category)
          <li ><a id="cavolo"  class="dropdown-item" href="{{ route('ArticoliPerCategoria', $category)}}">{{$category}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{ route('article.create') }}">Crea Articolo</a></li>
        <li><a href="{{ route('Contacts') }}">Contatti</a></li>
    </ul>
    <div class="search">
        <input type="text" placeholder="Cerca">
        <i class="ri-search-line"></i>
    </div>
</nav>
