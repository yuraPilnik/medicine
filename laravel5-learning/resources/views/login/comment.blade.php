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
		 <div id="formContent">
		 @if($error == 0)
		<form method="post" action="/laravel5-learning/public/login/submitcomment">
			{!! csrf_field() !!}
			@if(count($array_comment) == 0)
				<textarea id="areaCommentary" placeholder="Напиши отзыв об этом враче первым!!!" name="comment"></textarea>
				<input type="submit" value="Написать" class="myButton">
				<input type="hidden" value="{!! $namePatient !!}" name="namePatient">
				<input type="hidden" value="{!! $idPatient !!}" name="idPatient">
				<input type="hidden" value="{!! $idDoctor !!}" name="idDoctor">
			@else
				<textarea id="areaCommentary" placeholder="Напишите отзыв" name="comment"></textarea>
				<input type="submit" value="Написать" class="myButton">
				<input type="hidden" value="{!! $namePatient !!}" name="namePatient">
				<input type="hidden" value="{!! $idPatient !!}" name="idPatient">
				<input type="hidden" value="{!! $idDoctor !!}" name="idDoctor">
			@endif
		 </form>
		 @elseif($error == 1)
		 <form method="post" action="/laravel5-learning/public/login/submitcomment">
			{!! csrf_field() !!}
			 <div id="errorFields">Пустое поле для комментария!!!</div>
			@if(count($array_comment) == 0)
				<textarea id="areaCommentary" placeholder="Напиши отзыв об этом враче первым!!!" name="comment"></textarea>
			 	<input type="hidden" value="{!! $namePatient !!}" name="namePatient">
				<input type="hidden" value="{!! $idPatient !!}" name="idPatient">
				<input type="hidden" value="{!! $idDoctor !!}" name="idDoctor">
				<input type="submit" value="Написать" class="myButton">
			@else
				<textarea id="areaCommentary" placeholder="Напишите отзыв" name="comment"></textarea>
				<input type="submit" value="Написать" class="myButton">
				<input type="hidden" value="{!! $namePatient !!}" name="namePatient">
				<input type="hidden" value="{!! $idPatient !!}" name="idPatient">
				<input type="hidden" value="{!! $idDoctor !!}" name="idDoctor">
			@endif
		 </form>
		  @elseif($error == 2)
		 	<form method="post" action="/laravel5-learning/public/login/submitcomment">
			{!! csrf_field() !!}
			@if(count($array_comment) == 0)
				<textarea id="areaCommentary" placeholder="Напиши отзыв об этом враче первым!!!" name="comment"></textarea>
				<input type="hidden" value="{!! $namePatient !!}" name="namePatient">
				<input type="hidden" value="{!! $idPatient !!}" name="idPatient">
				<input type="hidden" value="{!! $idDoctor !!}" name="idDoctor">
				<input type="submit" value="Написать" class="myButton">
			@else
				<textarea id="areaCommentary" placeholder="Напишите отзыв" name="comment"></textarea>
				<input type="submit" value="Написать" class="myButton">
				<input type="hidden" value="{!! $namePatient !!}" name="namePatient">
				<input type="hidden" value="{!! $idPatient !!}" name="idPatient">
				<input type="hidden" value="{!! $idDoctor !!}" name="idDoctor">
			@endif
		 </form>
		 @endif
		 </div>
      	@if(count($array_comment) != 0)
        <div id = "content">
				<div id="scroling1">
				@for($i=0; $i < count($array_comment); $i++)
					<div id="commentHeadName">
						{!! $arrayNamePatient[$i] !!}
		 			</div>
					<div id="commentHeadDate">
						{!! $array_create[$i] !!}
		 			</div>
					<div id="comment">	
						{!! $array_comment[$i] !!}
					</div>	
				@endfor	
        </div>
        </div>
	 	@endif
        <div id = "clear">
        </div>
    </div>
	 <div id = "footer">
		 copyright 2016 chntu Yuri Pilnik
        </div>
</body>
</html>