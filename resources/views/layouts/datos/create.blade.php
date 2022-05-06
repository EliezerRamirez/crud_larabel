@extends('layouts.app')

@section('title','create')
    
@section('content')
<form action="/datos/store" method="post" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    <h2 class="text-2xl text-center p-y-4 mb-4 font-semibold">Agregar un nuevo usuario</h2>
    @csrf
    <input name="name" class="my- w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900 py-3 px-6 hover:bg-green-500"
    placeholder="name">
    <br/>
    <input name="lastname" class="my- w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900 py-3 px-6 hover:bg-green-300"
    placeholder="lastname">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-700">send</button>

</form>

@endsection