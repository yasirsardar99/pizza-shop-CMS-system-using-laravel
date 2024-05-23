@extends('layouts.app')
@include('pizza.navbar')


@section('content')

@if(session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<table class="table table-bordered table-striped text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($all_pizza as  $key => $pizza)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $pizza->name }}</td>
                <td>{{ Str::words($pizza->description, '25') }}</td>
                <td>{{ $pizza->price }}</td>
                <td>
                    {{-- {{ $pizza->image }} --}}
                    <img class="border rounded " src="{{Storage::url($pizza->image)}}" width="80" alt="">
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('pizza.edit', $pizza->id)}}">
                            <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                        </a>
                    <form class="mx-1" action="{{ url('/pizza/' . $pizza->id . '/delete') }}" method="POST">
                         @csrf
                          @method('DELETE')
                   <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    </div>
                    
                </td>
            </tr>

       
            @endforeach
    </tbody>
    </thead>

</table>

<div class="container warning ">
    {{$all_pizza->links()}}
</div>

@endsection
