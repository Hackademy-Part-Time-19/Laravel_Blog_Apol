<x-layout>
    <h1 style="color: white">Modifica la categoria</h1>
    <x-success/>
    <x-falled/>
<form action=" {{ route('categories.update', compact('category')) }}" method="post">
        @csrf
        @method('PUT')
        
        <label style="color: white" for="name">Nome categoria</label>
<input placeholder="{{ $category->name }}" style="border: solid 1px white;color: white; " type="text" name="name" id="name">
        <button type="submit"
            style=" border-radius: 10px;width: 100px; background-color:rgb(255, 255, 255); color:rgb(0, 0, 0); border:none"> Salva
        </button>
    </form>
</x-layout>
