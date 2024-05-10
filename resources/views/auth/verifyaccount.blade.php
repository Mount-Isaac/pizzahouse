@extends('layouts.layout')

@section('content')
<div class='container p-5'>
    <div class="row text-center">
        <p class='h1 mb-3'>Pizza House</p>
        <p class='h1 mb-5'>The North's Best Pizzas</p>
    </div>

    <div>
        <p>Your verification token is 
            <span class='mx-2 text-primary'>{{ $token }}</span>
        </p>
    </div>
</div>
@endsection