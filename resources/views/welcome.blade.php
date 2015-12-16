@extends('layouts.master')

@section('title', 'Birdwatcher: The Birder App.')  

@section('appendStyle')
  *{
    text-align: center;
  }
@stop 

@section('jumbotron')
  <br> 
  <p>
    Welcome to Birdwatcher, where birdwatchers can share information and feel at home.
    To get started <a href='/'>log in</a> or <a href='/register'>register</a>.
  </p>
<p>
<?php
$birds= \Birdwatcher\Bird::all();

if(!$birds->isEmpty()) {
    foreach($birds as $bird) {
      $rarity= \Birdwatcher\Rarity::find($bird->rarity_id);
        echo $rarity->rarity.' '.'<br>';
    }
}
else {
    echo 'No birds found';
}
?>
</p>
@stop