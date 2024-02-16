@if (session()->has('error'))
<h2 class="alert alert-danger">{{session('error')}}</h2>
@endif