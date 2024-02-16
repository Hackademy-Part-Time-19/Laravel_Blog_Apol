<x-layout>
    <h1 style="color: white">Crea il tuo articolo</h1>

    
    <form  style="width: 50%;margin-top: 50px" action="{{ route('article.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label style="color: white" for="name" class="form-label">Titolo</label>
                <input name="title" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label style="color: white" for="email" class="form-label">Descrizione</label>
                <input name="description" type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label style="color: white" for="email" class="form-label">Url immagine</label>
                <input name="image" type="text" class="form-control" aria-describedby="emailHelp">
            </div>
    
    
        <div style="width: 100%" class="mb-3">
            <label style="color:white;">Categoria:</label>
    <select style="width: 100%; background-color: white; height: 40px" name="categoria" >
              <option value="Music">Music</option>
              <option value="Arcade">Arcade</option>
              <option value="Tv+">Tv+</option>
              <option value="iBooks">iBooks</option>
            </select>
        </div>
    
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>

</x-layout>
