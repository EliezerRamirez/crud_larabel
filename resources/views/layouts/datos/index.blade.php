@extends('layouts.app')

@section('title','home')
    
@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg " >
  <form action="" class="form-inline my-2 my-lg-0 flo">
    <input name="buzcar" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-7" type="submit">Search</button>
  </form>

    <table class="table-fixed w-full " >
      
      <thead>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

        <tr class="bg-indigo-500 text-white hover:bg-blue-700">
          <th class="w-60 py-4 ... hover:bg-blue-700">Name</th>
          <th class="w-1/0.2 py-4 ... hover:bg-blue-700">Lastname</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $row)

            <td class="py-3 px-6 hover:bg-green-500">{{$row->name}}</td>
            <td class="py-3 px-6 hover:bg-green-200">{{$row->lastname}}</td>
            <td class="p-3 hover:bg-blue-700">

              <form action="{{url('/datos/'.$row->id) }}" method="POST">
                @csrf
              {{method_field('DELETE')}}
                <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                <i class="fas fa-trash"></i></button>

              </form>
              

                <a href="{{url('/datos/edit/'.$row->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                <i class="fas fa-pen"></i></a>
            </td>
            </tr>
       @endforeach
       
      </tbody>
        
    </table>  
    {{$products->links()}}
   
</div>

@endsection
