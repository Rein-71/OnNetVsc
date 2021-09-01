@extends('layouts.app')
<link href ="public/css/main.css" rel="stylesheet">
@section('content')
<div class=styelsheet>
<div class="flex-center position-ref full-height">
    <div class="content">
    <div class="container">
        <div class="title m-b-md">       
        </div>
<link href ="css/main.css" rel="stylesheet">
<div class="wrapper pizza-details">
<h1>Order for {{ $pizza->address }}</h1>
<p class="type"> Vaccine - {{$pizza->type}}</p>
<p class="shotno"> Shot no - {{$pizza->shotno}}</p>
<p class="extras">Extra Supplies</p>
<ul>
       @if ($pizza->extras)
                @foreach ($pizza->extras as $extra)
                    <h3> <li> {{ $extra }} </li> </h3>
                @endforeach
      @endif
</ul>
<form action="/pizzas/{{ $pizza->id }}" method="POST"> 
@csrf
<button>Complete Order</button>
@method('DELETE')
</form>
</div>
<a href="/pizzas" class="back"> <-- Back to all orders</a>
@endsection
</div>
</div>
</div>
</div>

