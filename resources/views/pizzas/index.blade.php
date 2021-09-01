@extends('layouts.app')
@section('content')
<div class="wrapper pizza-index">
  <h1>Pizza orders</h1>
@foreach($pizzas as $pizza)
          <div class="pizza-item">
            <img src="/img/pizza.png">
           <h4> <a href="pizzas/{{ $pizza-> id}}" >{{ $pizza -> address }} </a></h4>
        @endforeach
</div>
   
      
@endsection
