@extends('layouts.master')

@section('title')
@stop
@section('jumbotron')
<h1>Add a new bird</h1>
<br><br><h3>Use the form below to enter a new bird into the system. If you need a bird image <a href="https://www.allaboutbirds.org/guide/search/" target="_blank">click here.</a></h3>
@stop
@section('content')

    


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
                value='{{ old('scientific_name','birdus namus scientificus') }}'
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
            <label for='rarity_id'>IUCN Rarity:</label>
            <select name='rarity_id' id='rarity_id'>
                @foreach($rarity_for_dropdown as $rarity_id => $rarity)
                    <option value='{{$rarity_id }}'> {{ $rarity}} </option>
                @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label>Description:</label>
            <input
                type='text'
                id='description'
                name='description'
                value='{{ old('description','Insert something here ...') }}'
            >
        </div>

        <button type="submit" class="btn btn-primary">Add bird</button>
    </form>

@stop
