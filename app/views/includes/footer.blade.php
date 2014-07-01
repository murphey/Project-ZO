<div class="wrapper">
<div class="foot-section"><h4>Sitemap</h4>
<ul>
<li><a href="{{ URL::to('pagina/toegankelijkheid') }}">Toegankelijkheid</a></li>
<li><a href="{{ URL::to('pagina/diensten') }}">Diensten</a></li>
<li><a href="{{ URL::to('pagina/beperkingen') }}">Beperkingen</a></li>
<li><a href="{{ URL::to('referenties') }}">Referenties</a></li>
<li><a href="{{ URL::to('nieuwsoverzicht') }}">Nieuws</a></li>
</ul>
</div>
<div class="foot-section"><h4>Contact Gegevens</h4>
ZO Adviesbureau<br>
...AB Amsterdam<br>
Nederland<br>
...............<br>
info@ZO.com
</div>
<div class="foot-section"><h4>Social Media</h4>
<a href="#"><img valign="middle" src="../img/twitter.jpg"/>&nbsp; Twitter</a><br>
<a href="#"><img valign="middle" src="../img/facebook.jpg"/>&nbsp; Facebook</a><br>
<a href="#"><img valign="middle" src="../img/linkedin.jpg"/>&nbsp; LinkedIn</a>
</div>
<div class="foot-section">
<div class="search"> 
<h4>Zoeken</h4>
{{ Form::open(array('url' => 'search')) }}
<div class="input-group"> 
<!-- search engine-->
{{ Form::text('search', '', array('class' => 'form-control')) }}
<span class="input-group-btn"> 
{{ Form::submit('Zoeken', array('class' => 'btn btn-default'))}}
</span>
{{ Form::close() }}
<br><br>
<div id="copyright-text-right">© Copyright 2014 ZO</div>
</div>
</div>
</div>
</div>