<div id="card" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    <div id="CardsBox">
        <img style="object-fit: cover; object-position: center" src="{{ Storage::url($image) }}  " width="100%"
            height="600px alt="">
        <div id="CardsBox2">
            <h2> {{ $name }}</h2>
            <div style="display: flex; align-items:end;background-color: rgba(255, 255, 255, 0)">
                <h5>Categoria: <img style="background-color: rgba(255, 255, 255, 0);margin-bottom: 7px;margin-left: 3px"
                        src="/imagini/apple.png" width="15px" height="18px" alt=""> <span
                        style="color: white; background-color: rgba(255, 255, 255, 0)">{{ $category }}</span>
                </h5>
            </div>
            <p>{{ $descrizione }}</p>
            {{ $slot }}
        </div>
    </div>

</div>