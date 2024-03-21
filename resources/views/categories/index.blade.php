<x-layout>
    <table class="table">
        <thead>
            <tr>
                <th style="color: white;background-color: rgba(0, 0, 0, 0.012);width: 5px" scope="col">#</th>
                <th style="color: white;background-color: rgba(0, 0, 0, 0);width: 30px" scope="col">Id</th>
                <th style="color: white;background-color: rgba(0, 0, 0, 0.012);width: 30px" scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th style="color: white;background-color: rgba(0, 0, 0, 0.012);width: 5px" scope="row">
                        {{ $category->id }}</th>
                    <td style="color: white;background-color: rgba(0, 0, 0, 0.012);width: 30px">{{ $category->name }}
                    </td>
                    <td style="color: white;background-color: rgba(0, 0, 0, 0.012);width: auto;display:flex">
                        <button style="background-color: white; border-radius: 10px;width: 100px;border:none "> <a
                                style="background-color: white;text-decoration: none;color:black" href="{{route ('categories.edit' , $category->id )}}">
                                Edit</a> </button>
                <form style="width: auto;margin-left: 10px" action=" {{ route('categories.destroy' , $category->id) }}" method="Post">
                            @csrf
                            @method('DELETE') 
                            <button  style="background-color: white; border-radius: 10px;width: 100px; background-color:rgb(240, 82, 82); color:white; border:none" >Delete</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
