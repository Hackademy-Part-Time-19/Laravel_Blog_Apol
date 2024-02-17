<x-layout>

    <section class="about"> <!--Chi sono-->
        <h1 class="titoloArticoli">{{ $titoloArticoli }}</h1>
        <div class="description">
            <div class="line"></div>
        </div>
        <div style="padding-top: 50px;" class="container text-center">
            @if (count($Articoli) == 0)
                <h1>Non ci sono articoli</h1>
            @else
                <div class="row">
                    @foreach ($Articoli as $key => $articolo)
                        <x-cards :articolo="$articolo">
                            <a href="{{ route('ArticleShow', ['id' => $key+1]) }}">Descrizione</a>
                        </x-cards>
                    @endforeach
                </div>
            @endif
        </div>
    </section>


    <x-footer />
</x-layout>
