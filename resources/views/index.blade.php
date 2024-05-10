
@extends('layouts.layout')

@section('content')
<div class='container p-5'>
    <div class="row text-center">
        <p class='h1 mb-5'>Pizza House</p>
        <p class='h1 mb-3'>The North's Best Pizzas</p>
    </div>

    <div>
        <p>{{ $age }}</p>

        <!-- LOOPS -->
        <!-- @for($i=0; $i<count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor -->

        @foreach($pizzas as $pizza)
            <div class='mb-3'>
                {{ $pizza ->name}} - {{ $pizza ->type}} - {{ $pizza ->base}} ${{ $pizza ->price}}
            </div>
        @endforeach
    </div>
</div>
@endsection


