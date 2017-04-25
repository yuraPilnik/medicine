<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
	 <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
     <link rel="stylesheet" type="text/css" href="{{ asset('css/comments.css') }}" />    
  <title>Отзывы</title>
 </head>
 <body>
	  <div id = "header">
           Отзывы   
		 </div>
      <a id = "mainRef" href="/laravel5-learning/public/">Главная</a> | <a id = "mainRef1" href="signinPatient">Вход</a> | <a id = "regRef" href="#">Отзывы</a>
	 <div id = "wrapper">
		 @if(count($mentions) != 0)
	 <div id="scroling">
        <div id = "content1">
				@for($i=0; $i < count($mentions); $i++)
					<div id="commentHeadName">
						{!! $names[$i] !!}
		 			</div>
					<div id="commentHeadDate">
						{!! $dates[$i] !!}
		 			</div>
					<div id="comment">	
						{!! $mentions[$i] !!}
					</div>	
				@endfor	
        </div>
	 	@endif
		 	
		 
		 </div>
        <div id = "clear">
        </div>
    </div>
	 <div id = "footer">
		 copyright 2016 chntu Yuri Pilnik
        </div>
</body>
</html>