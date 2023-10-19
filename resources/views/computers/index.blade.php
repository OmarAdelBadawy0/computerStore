@extends('layout')

@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center">
        <h1><b class="big">COMPUTERS</b></h1>
    </div>

    <div class="">
            @if (count($computers) > 0)     
            <ul>
                @foreach ($computers as $computer)
                <a href="{{route('computers.show', ['computer' => $computer['id']]) }}"> 
                    <li>
                        <p> {{ $computer['name'] }} is from {{ $computer['origin'] }}<strong> Price = {{ $computer['price'] }}$</strong> </p>
                    </li> 
                </a>
                @endforeach
            </ul>
            @else
                <p>There are no computers</p>   
            @endif
            
    </div>
</div>
@endsection