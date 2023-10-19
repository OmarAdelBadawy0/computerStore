@extends('layout')

@section('title', 'Show a Computers')

@section('content')
<div class="max-w-6xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center pt-8">
        <h1><b class="big">COMPUTERS</b></h1>
    </div>

    <div class="mt-16"> 
            <h3>
                {{ $computer['name'] }} is from {{ $computer['origin'] }}<strong> price = {{ $computer['price'] }}$</strong>
            </h3>
    </div>

    <a class="edit-btn" href="{{route('computers.edit', $computer->id )}}">Edit</a>
</div>
@endsection