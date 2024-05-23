@extends('layouts.app')
@include('pizza.homenavtwo')


@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
                    @if (session('status'))
                         <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

           <style>
            .card-title {
    float: none!important; 
}
           </style>

@if(auth()->user())
    @if(auth()->user()->isAdmin == 1)
    <div class="col-12 row d-flex justify-content-center py-3">
    <div class="div">
    <a class='btn btn-primary' href='{{route("pizza.create")}}'>Create</a> 
    <a class='btn btn-success' href='{{route("pizza.index")}}'>View All</a> 
    </div>
    </div>
    @endif
@endif

<div class="row col-12 py-5">
    <div class="col-6">
        <h3>Pizza Shop</h3>
       
        <p>Greetings! Crafting a delectable online presence for your pizza emporium, our CMS website design seamlessly blends aesthetic appeal with user-friendly functionality. Engage your audience with enticing visuals and smooth navigation, showcasing your delightful frozen creations. Elevate customer experience through a tastefully designed platform that reflects the essence of your brand. Let's scoop up success together!






</p>
    </div>
    <div class="col-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               
             
               
             @foreach($all_pizza as $key => $pizza)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
               
                <img src="{{ Storage::url($pizza->image)}}"  class="border rounded" alt="Los Angeles" width="100%" height="300">
               
            </div> 
         @endforeach  
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
{{-- <div id="demo" class="carousel-slide" data-ride="carousel">

 

<!-- The slideshow -->
<div class="carousel-inner">
@foreach($all_pizza as $key => $pizza)

  <div class="carousel-item active">
    <img src="{{ Storage::url($pizza->image)}}"   alt="Los Angeles" width="300" height="300">
    </div> 

  @endforeach 

</div>



<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> --}}

    </div>
</div>


<div class="row col-12 ">
    <h3 class="text-center">All Products</h3>
</div>





<div class="col-md-12 row">
                 
                    @foreach($all_pizza as $key => $pizza)
                    <div class="col-4 my-2">
                    <div class="card  text-center" >
                    <img  class="m-auto border rounded"  src=" {{ Storage::url($pizza->image)}}"  width='100%' height='150'>
                    <div class="card-body  text-center">
                    <h6 class="card-title  text-uppercase"> {{ $pizza->name;}}</h6>
                    <p class="card-text text-center"> Rs. {{ $pizza->price;}}</p>
                    </div>
                </div>
                    </div>
                  
                    @endforeach 
                    </div>


          
        </div>
    </div>
</div>
@endsection

<script>
    setTimeout(() => {
        document.querySelectorAll('.carousel-item')[0].classList.add('active')
    }, 500);
</script>