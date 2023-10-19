@extends('layout')

@section('title', 'Edit a Computers')

@section('content')
<div class="max-w-6xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center pt-8">
        <h1><b class="big">Edit a computer</b></h1>
    </div>

    <div class="flex justify-center pt-8">
        <form action="{{route('computers.update', ['computer' => $computer->id])}}" method="post" class="form bg-white p-6 border-1">
            @csrf
            @method('PUT')
            
            <div>
                <label for="computer-name">Computer Name</label>
                    <input id="computr-name" name="computer-name" type="text" value="{{$computer->name}}">
                    @error('computer-name')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div>
                <label for="computer-origin">Computer Origin</label>
                <input id="computr-Origin" name="computer-origin" type="text" value="{{$computer->origin}}">
                    @error('computer-origin')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                    @enderror
            </div>

            <div>
                <label for="computer-price">Computer Price</label>
                <input id="computr-price" name="computer-price" type="text" value="{{$computer->price}}">
                    @error('computer-price')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>

</div>
@endsection