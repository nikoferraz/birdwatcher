@extends('layouts.master')

@section('title')
@stop

@section('jumbotron')

    <h2>Add a new bird</h2>


    <form method='POST' action='/birds/create'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <div class='form-group'>
            <label>Name:</label>
            <input
                type='text'
                id='name'
                name='name'
                value='{{ old('name','Bird Name') }}'
            >
        </div>

        <div class='form-group'>
            <label for='scientific_name'>Scientific Name:</label>
              <input
                type='text'
                id='scientific_name'
                name='scientific_name'
                value='{{ old('scientific name','birdus namus scientificus') }}'
            >
        </div>

        <div class='form-group'>
            <label for='image'>Image (URL):</label>
            <input
                type='text'
                id='image'
                name="image"
                value='{{ old('image','Some Image') }}'
                >
        </div>

        <div class='form-group'>
            <label for='natural_habitat'>Natural habitat:</label>
            <input
                type='text'
                id='natural_habitat'
                name="natural_habitat"
                value='{{ old('natural_habitat','Place') }}'
                >
        </div>


       <div class='form-group'>
            <label for='rarity'>IUCN Rarity:</label>
            <select name='rarity' id='rarity'>
                @foreach($rarity_for_dropdown as $rarity_id => $rarity)
                    <option value='{{$rarity_id }}'> {{ $rarity}} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add bird</button>
    </form>

@stop
