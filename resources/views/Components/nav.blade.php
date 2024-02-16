<nav class="fill"> <!--Nav Bar-->
    <img src="/imagini/LogoSignature.png" alt="">
    <ul>
        <li><a href="{{ route('HomePage') }}">Home</a></li>
        <li><a href="{{ route('ArticleIdex') }}">Articoli</a></li>
        <li><a href="{{ route('WhoIam') }}">Chi Sono</a></li>
        <li><a href="{{ route('article.create') }}">Crea Articolo</a></li>
        <li><a href="{{ route('Contacts') }}">Contatti</a></li>
    </ul>
    <div class="search">
        <input type="text" placeholder="Cerca">
        <i class="ri-search-line"></i>
    </div>
</nav>
