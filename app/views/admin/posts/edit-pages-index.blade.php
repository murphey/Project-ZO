@extends('admin.master')
@section('content')
<div class="sub-wrap">
<div class="col-md-13">
<h1 class="h1-purple">Selecteer een pagina die u wilt bewerken.</h1>
<select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
   <option value=""> Hieronder</option>

@foreach($posts as $p)

   <option value="pages/{{$p->id}}/edit-page"> {{$p->page_title}}</option>

@endforeach


</div>
	</div>		


@stop