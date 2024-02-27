<x-layout>

    <section class="about"> 
        <h1 class="titoloArticoli">{{ $titoloArticoli }}</h1>
        <div class="description">
            <div class="line"></div>
        </div>
        <div style="padding-top: 50px;" class="container text-center">
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
