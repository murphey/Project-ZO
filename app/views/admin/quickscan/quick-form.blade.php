@extends('../layouts.default')
@section('content')
{{HTML::style('css/checkbox.css');		}}
<div id="to-top"></div>

<div class="quick">
<h1>	Vink alle quickscan velden in.</h1>
<div class="check-wrap">
<h3 style="color:red">Bijna niet <span style="color:black">..............</span> <span style="color:green">Uitmuntend</span></h3>
	{{Form::open(array('route' => 'quick.store'))}}
	@foreach($quest as $p)

<h4 class="check-4">{{ Form::label( $p->questions) }}</h4>

@for($alphas='a'; $alphas<='d'; $alphas++)

<div class="checks">{{ Form::radio($p->id,$alphas, '', array('id' =>$p->id.$alphas))}} <label for="<?php echo $p->id.$alphas ?>"><span></span></label> </div>

@endfor

@endforeach
</p>
      <h5>  {{ Form::label('user_school', 'School Naam:', array('class' => 'school')) }} </h5>
     {{ Form::text('user_school') }} 
<h5>{{ Form::label('user_email', 'E-mail:', array('class' => 'email')) }}</h5>
    @if($errors->has('user_email'))
  <h5 style="color:red">  {{ $errors->first('user_email') }} </h5>
        @endif

      <!-- handle this -->
      {{ Form::text('user_email') }}  
{{ form::submit('Verzenden')}}	
	{{ Form::close() }}
	</div>
	<img src="http://www.clker.com/cliparts/Z/C/p/C/r/W/question-mark-md.png" width="300">
	</div>

@stop