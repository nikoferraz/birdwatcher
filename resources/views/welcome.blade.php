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
  <h3>
    Welcome to Birdwatcher, where birdwatchers can share information and feel at home.
    To get started <a href='/login'>log in</a> or <a href='/register'>register</a>.
  </h3>
<br>
@stop
@section('content')
<div class ="container">
  <h3>Log in and start creating a log of the birds you have seen ...</h3><br>
  <p>Birdwatcher allows you to keep a detailed record of the birds that you have seen and where you have seen them.</p>
</div> 
<?php
$birds= \Birdwatcher\Bird::orderBy('id','ASC')->get();
$output='';
if(!$birds->isEmpty()) {
    foreach($birds as $bird) {
      $rarity= \Birdwatcher\Rarity::find($bird->rarity_id);
      $rarity = $rarity->rarity.' ('.$rarity->rarity_acronym.')'; 
      if($rarity=="Least concern (LC)")
        $rarity='<font color="green">'.$rarity.'</font>';
      elseif($rarity=="Critically endangered (CR)")
        $rarity='<font color="fuscia">'.$rarity.'</font>';
      elseif($rarity=="Vulnerable (VU)")
        $rarity='<font color="purple">'.$rarity.'</font>';


      $output = $output.'<div class="col-sm-6 col-md-4">'.'<div class="thumbnail">'.'<img src="'.$bird->image.'">'.'<div class="thumbnail">'.'<h3>'.$bird->name.' (<i> '.$bird->scientific_name.' </i>) </h3>'.'<p><b>IUCN Conservation Status: '.$rarity.'</b></p>'.'<p>'.'Description: '.$bird->description.'</p></div></div></div>';
    }
    echo '<div class="row">'.$output.' '.'</div><br><br>';
}
else {
    echo 'No birds found';
}
?>
@stop



