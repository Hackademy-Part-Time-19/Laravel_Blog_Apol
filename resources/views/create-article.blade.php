<x-layout>
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column">
  
    <h1 style="color: white">Crea il tuo articolo</h1>

    <h2>
        <x-success/>
     
   
     </h2>
    <form style="width: 50%;margin-top: 50px" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label style="color: white" for="email" class="form-label">Url immagine</label>
        <input name="image" type="file" class="form-control" aria-describedby="emailHelp" value="{{ old('image') }}">
    <!--   <input name="text" type="file" class="form-control" aria-describedby="emailHelp" value="{{ old('image') }}"> -->
        </div>
        <div class="mb-3">
            <label style="color: white" for="name" class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control" value="{{ old('title') }}"">
     @error('title') <div><span style="color: rgb(234, 55, 55)">{{ $message }}</span></div> @enderror
        </div>
        <div style="width: 100%" class="mb-3">
            <label style="color:white;">Categoria:</label>
            <select style="width: 100%; background-color: white; height: 40px" name="categoria" >
            <option value="">Scegli la categoria</option>
            @foreach($categories as $category)
                <option value="Music">{{$category->name}}</option>
    
                @endforeach
            </select>
            @error('categoria') <div><span style="color: rgb(234, 55, 55)">{{ $message }}</span></div> @enderror
        </div>
        <div  class="mb-3">
            <label style="color: white" for="email" class="form-label">Descrizione</label>
        <input style="height: 100px" name="description" type="text" class="form-control" aria-describedby="emailHelp" value="{{ old('description') }}">
            @error('description') <div><span style="color: rgb(234, 55, 55)">{{ $message }}</span></div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>
</x-layout>
