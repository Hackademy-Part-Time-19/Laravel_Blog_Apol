<x-layout>

    <section class="about"> <!--Chi sono-->
        @if (count($Articoli) >= 0)
            <h1>Articoli: {{ $Articoli[0]['categoria'] }}</h1>
        @endif
        <div class="description">
            <div class="line"></div>
        </div>
        <div style="padding-top: 50px;width: 100%;" class="container text-center">
            @if (count($Articoli) == 0)
                <h1>Non ci sono articoli</h1>
            @else
                <div class="row">
                    @foreach ($Articoli as $articolo)
                        <x-cards 
                    :name="$articolo['title']"
                    :descrizione="$articolo['description']"
                    :image="$articolo['image']"
                    :id="$articolo['id']"
                    :category="$articolo['categoria']"
                    >
                        
                <a href="{{ route('ArticleShow', ['id' => $articolo['id']]) }}">Descrizione</a>
                        </x-cards>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <x-footer />
</x-layout>
 