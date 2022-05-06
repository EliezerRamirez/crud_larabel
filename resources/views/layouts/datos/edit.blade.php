@extends('layouts.app')

@section('title','edit')
    
@section('content')

<form action ="{{url('/datos/update/'.$row->id)}}" method="post" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    <h2 class="text-2xl text-center p-y-4 mb-4 font-semibold">
        Editar usuario 
    </h2>
    @csrf
    @method('PATCH')
    <input name="name" class="my- w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900 py-3 px-6 hover:bg-green-500"
    placeholder="name" value="{{$row->name}}">
    <br/>
    <input name="lastname" class="my- w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900 py-3 px-6 hover:bg-green-200"
    placeholder="lastname" value="{{$row->lastname}}">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-700 ">Send</button>

</form>

@endsection