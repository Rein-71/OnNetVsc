

@extends('layouts.app')
<link href ="css/main.css" rel="stylesheet">
@section('content')
@if (Route::has('login'))
        <div class="top-right links">
           
        </div>
    @endif

<div class="flex-center position-ref full-height">
   
    

    <div class="content">
    <img src="/img/pizza-house.png" alt ="pizza house logo">
        <div class="title m-b-md">
            Satefy is our number one priority 
        </div>
        
        <a href="/pizzas/create"> Order</a>    </div>
        @endsection
</div>


