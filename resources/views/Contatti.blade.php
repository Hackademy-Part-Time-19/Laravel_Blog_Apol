<x-layout>
    <h1 style="color: white">Contattaci</h1>
    <h2>
       <x-success/>
       <x-falled/>
    </h2>

    <div style="width: 50%;;justify-content: center;margin-top: 50px">
        <form action="{{ route('Email.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label style="color: white" for="name" class="form-label">Nome e Cognome</label>
                <input name="name" type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label style="color: white" for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label style="color: white" for="description" class="form-label">Description</label>
                <input name="description" type="text" class="form-control" id="description">
            </div>
            <div class="mb-3">
                <label style="color: white" for="adress" class="form-label">Indirizzo</label>
                <input name="adress" type="text" class="form-control" id="adress">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

</x-layout>
