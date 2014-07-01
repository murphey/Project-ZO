@extends('layouts.default')

@section('content')
<div id="to-top"></div>
<div id="main-wrap">

   <div id="content-left">
    <h1 class="h1_paars">{{$posts->page_title}}</h1>
	{{$posts->page_content}}

   </div>
   	<div id="content-right">
		<div class="img_r">{{ HTML::image('img/overzo.jpg', 'Over Zorgeloos Onderwijs') }}		</div>
	</div>
	   <div class="stripe">&nbsp;</div>   


 <div id="who-left">
    <span class="h1_paars">Wie werken er</span><br />
   
   <div id="over-all">

   <div class="who_img">
   	{{ HTML::image('img/wie.jpg', 'har') }}	
   </div>
<p>
<span class="orange">Henk Bleyendaal</span><br />
Was jarenlang projectmanager bij de NUSO, de landelijke organisatie voor het speeltuinwerk. Daar legde hij zich voornamelijk toe op het cre&euml;ren van toegankelijke, uitdagende en veilige speelvoorzieningen voor kinderen met een beperking. </p>
</div>
   <div id="over-all">

   <div class="who_img">
   	{{ HTML::image('img/wie.jpg', 'har') }}	
   </div>
<p>
<span class="orange">Dick Spee</span><br />
Was jarenlang projectmanager bij de NUSO, de landelijke organisatie voor het speeltuinwerk. Daar legde hij zich voornamelijk toe op het cre&euml;ren van toegankelijke, uitdagende en veilige speelvoorzieningen voor kinderen met een beperking.</p>
   </div>
      
      <div id="over-all">

      <div class="who_img">
   	{{ HTML::image('img/wie.jpg', 'har') }}	
   </div>
<p>
<span class="orange">Henk Spee</span><br />
Was jarenlang projectmanager bij de NUSO, de landelijke organisatie voor het speeltuinwerk. Daar legde hij zich voornamelijk toe op het cre&euml;ren van toegankelijke, uitdagende en veilige speelvoorzieningen voor kinderen met een beperking.</p>
</div>

</div>

   </div>
</br>
@stop