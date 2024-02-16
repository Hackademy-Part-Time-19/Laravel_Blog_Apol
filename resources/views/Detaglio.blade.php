<x-layout>

    <section class="about"> <!--Chi sono-->
        <h1>Detaglio</h1>
        <div class="description">
            <div class="line"></div>
          </div>
        <div style="padding-top: 50px;" class="container text-center">
            <div class="row">
                <div id="card">
                    <div id="card" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div id="CardsBox">
                <img src="{{ $articolo['image'] }}" width="100%" height="auto" alt="">
                <div id="CardsBox2">
                        <h2> {{$articolo['title']}}</h2>
                        <div style="display: flex; align-items:end;background-color: rgba(255, 255, 255, 0)"> <h5 >Categoria:  <img style="background-color: rgba(255, 255, 255, 0);margin-bottom: 7px;margin-left: 3px" src="/imagini/apple.png" width="15px" height="18px" alt=""> <span style="color: white; background-color: rgba(255, 255, 255, 0)">{{ $articolo['categoria'] }}</span></h5></div>
                        <p>{{$articolo['description']}}</p>
                    
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer/>
</x-layout>