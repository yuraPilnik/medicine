<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	 <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
     <link rel="stylesheet" type="text/css" href="{{ asset('css/services.css') }}" />    
  <title>Вход</title>
 </head>
 <body>
	  <div id = "header">
           Услуги  
	  </div>
	 <div id="menu"> <a id = "mainRef" href="/laravel5-learning/public/">Главная</a> | <a id = "regRef" href="">Услуги</a></div>
	 <div id = "wrapper">       
        <div id = "content">
			<span id="head"> Наша клиника предостовляет следующие услуги:  </span>
			@foreach($uniqSpec as $specUniq)
			<ul>
				<b><li>{!! $specUniq  !!}:</li></b>
				@foreach($specialty as $doctor)
					@if($doctor->specialty == $specUniq)
						<div id="fio"> - {!! $doctor->fio !!};</div>
					@endif
				@endforeach
			</ul>
			@endforeach
			<span id="head">У нас вы можете получить следующие услуги:</span>
			<ul>
				<li>Лечение</li>
				<li>Осмотр</li>
				<li>Стационарное лечение</li>
			</ul>
		 </div>
    </div>
        <div id = "clear">
        </div>
	 <div id = "footer">
		 copyright 2016 chntu Yuri Pilnik
        </div>
</body>
</html>