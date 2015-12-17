@extends('layouts.master')

@section('title', 'Birdwatcher: The Birder App.')  

@section('appendStyle')
  *{
    text-align: center;
  }
@stop 
@section('appendHead')
<script>
jQuery(window).load(function() {

  var allImages = jQuery('.thumbnail img');
  var imageSmallest = allImages[0];

  jQuery(allImages).each(function() {
      // find smallest image height
      if (jQuery(this).height() < jQuery(imageSmallest).height())
          imageSmallest = jQuery(this);
  });
  // Set the images container height to that of the smallest image
  jQuery('.thumbanil').height(jQuery(imageSmallest).height());
 
});
</script>
@stop
@section('jumbotron')
  <br> 
  <p>
    Welcome to Birdwatcher, where birdwatchers can share information and feel at home.
    To get started <a href='/'>log in</a> or <a href='/register'>register</a>.
  </p>
<br>
@stop
@section('content')
<?php
$birds= \Birdwatcher\Bird::all();

if(!$birds->isEmpty()) {
    foreach($birds as $bird) {
      $rarity= \Birdwatcher\Rarity::find($bird->rarity_id);
      $rarity = $rarity->rarity.'('.$rarity->rarity_acronym.')'; 
      $bird = '<div class="row">'.'<div class="col-sm-6 col-md-4">'.'<div class="thumbnail">'.'<img src="'.$bird->image.'">'.'<div class="thumbnail">'.'<h3>'.$bird->name.' ('.$bird->scientific_name.') </h3>'.'<p>'.'Description: '.$bird->description.'</p></div></div></div></div>';
        echo $bird.' '.'</div><br><br>';
    }
}
else {
    echo 'No birds found';
}
?>
@stop



