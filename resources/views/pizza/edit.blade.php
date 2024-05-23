@extends('layouts.app')
@include('pizza.navbar')



@section('content')

<div class="container">
    <div class="row justify-content-center">
    {{-- <div class="col-md-2">
    <div class="card">
                <div class="card-header">Sidebar</div>

                <div class="card-body">
                <ul>
                <li>
                        <a href="{{ route('pizza.index') }}">View All</a>
                    </li>
                    <li>
                        <a href="{{ route('pizza.create') }}">Create</a>
                    </li>
                </ul>
                </div>
            </div>
    </div> --}}
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if(count($errors)>0)
                 @foreach ($errors->all() as $error)
                         <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                    @endif


                <form action="{{route('pizza.update', $pizzaCol->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="name">Pizza Name</label>
                                <input type="text" class="form-control"  name="name" value={{$pizzaCol->name}} placeholder="name ">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Pizza Description</label>
                                <textarea class="form-control" name="description" >
                                    {{$pizzaCol->description}}
                                </textarea>
                            </div>
                            <div class="form-inline mb-4">
                                <label class="mx-2">Pizza price </label>
                                <div class="d-flex"> 
                                <input type="number" name="price" value={{$pizzaCol->price}} class="form-control"
                                    placeholder="  price">
                                    </div>
                            </div>
                           
                            <div class="form-group mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" name="image">
                                <img class="border rounded m-2 " src="{{Storage::url($pizzaCol->image)}}" width="80" alt="">
                            </div>
                            <div class="form-group text-center">
                                <button class=" col-md-8 btn btn-warning my-5" type="submit">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
