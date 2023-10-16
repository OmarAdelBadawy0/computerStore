@extends('layout')

@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center pt-8">
        <h1><b class="big">COMPUTERS</b></h1>
    </div>

    <div class="mt-16"> 
            <h3>
                {{ $computer['name'] }} is from <strong>{{ $computer['origin'] }}</strong>
            </h3>
            
    </div>
</div>
@endsection