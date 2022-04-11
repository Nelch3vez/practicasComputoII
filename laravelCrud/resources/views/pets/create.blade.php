<h2>Nueva Mascota</h2>
<form action="{{ url('/pet') }}" method="post">
    @csrf
    @include('pets.form')
</form>