@extends('layouts.default')

@section('content')
<div id="to-top"></div>
<div id="main-wrap">
	<div id="content-left">
				@if(Auth::check())
<h3>{{		link_to('pages/'.$posts->id . '/edit-page', $posts->page_title. ' Bewerken.', $attributes = array(''), $secure = null);
}}			
</h3>
@else
@endif
		<h1 class="h1" style="margin-bottom: 38px !important;">{{$posts->page_title}}</h1>
		<p>
		

			{{$posts->page_content}}
		</p>
	</div>
	<div id="content-right">
			<p class="quote2"><span style="color: #29b473;">"Zelfstandig op een andere</span> <span style="color: #f6931e;">verdieping kunnen komen"</span></p>
	</div>
</div>

<div class="content">
    <div class="effect vis">
        <div class="titel">
            <div class="tekst">Visuele beperkingen</div>
        </div>
        <a href="JavaScript:void()"><div class="afbeelding"></div></a>
        <div class="description">
            <div class="tekst_description">
                Lorem ipsum dolor sit amet, consectetuer adipiscin elit.
                <br />
                <br />
                <a href="#" style="text-decoration: underline; font-weight: bold; padding: 0; margin: 0; color: white;">Meer informatie over slechthorendheid.</a>
                <br />
                <br />
                Aenean commodo ligula eget dolor. Aenean massa. Lorem isum dolor sit amet.
                <br />
                <br />
                <a href="#" style="text-decoration: underline; font-weight: bold; padding: 0; margin: 0; color: white;">Meer informatie over doofheid.</a>
            </div>
        </div>
    </div>
    <div class="effect aud">
        <div class="titel">
            <div class="tekst">Auditieve beperking</div>
        </div>
        <a href="JavaScript:void()"><div class="afbeelding"></div></a>
        <div class="description">
            <div class="tekst_description">
                Lorem ipsum dolor sit amet, consectetuer adipiscin elit.
                <br />
                <br />
                <a href="#" style="text-decoration: underline; font-weight: bold; padding: 0; margin: 0; color: white;">Meer informatie over slechthorendheid.</a>
                <br />
                <br />
                Aenean commodo ligula eget dolor. Aenean massa. Lorem isum dolor sit amet.
                <br />
                <br />
                <a href="#" style="text-decoration: underline; font-weight: bold; padding: 0; margin: 0; color: white;">Meer informatie over doofheid.</a>
            </div>
        </div>
    </div>
    <div class="effect lic">
        <div class="titel">
            <div class="tekst">Lichamelijke beperking</div>
        </div>
        <a href="JavaScript:void()"><div class="afbeelding"></div></a>
        <div class="description">
            <div class="tekst_description">
                Lorem ipsum dolor sit amet, consectetuer adipiscin elit.
                <br />
                <br />
                <a href="#" style="text-decoration: underline; font-weight: bold; padding: 0; margin: 0; color: white;">Meer informatie over slechthorendheid.</a>
                <br />
                <br />
                Aenean commodo ligula eget dolor. Aenean massa. Lorem isum dolor sit amet.
                <br />
                <br />
                <a href="#" style="text-decoration: underline; font-weight: bold; padding: 0; margin: 0; color: white;">Meer informatie over doofheid.</a>
            </div>
        </div>
    </div>
    <div class="effect ove">
        <div class="titel">
            <div class="tekst">Overig</div>
        </div>
        <a href="JavaScript:void()"><div class="afbeelding"></div></a>
        <div class="description">
            <div class="tekst_description">
                Lorem ipsum dolor sit amet, consectetuer adipiscin elit.
                <br />
                <br />
                <a href="#" style="text-decoration: underline; font-weight: bold; padding: 0; margin: 0; color: white;">Meer informatie over slechthorendheid.</a>
                <br />
                <br />
                Aenean commodo ligula eget dolor. Aenean massa. Lorem isum dolor sit amet.
                <br />
                <br />
                <a href="#" style="text-decoration: underline; font-weight: bold; padding: 0; margin: 0; color: white;">Meer informatie over doofheid.</a>
            </div>
        </div>
    </div>       
</div>




</br>
@stop