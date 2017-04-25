<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
	 <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
     <link rel="stylesheet" type="text/css" href="{{ asset('css/comments.css') }}" />    
  <title>Чат-поддержка</title>
 </head>
 <body>
	  <div id = "header">
              Чат-поддержка
		 </div>
	 	@foreach($message as $mess)
	 		<b>{!! $mess->author !!}</b>
	 		<p>{!! $mess->content !!}</p>
	 	@endforeach
      <a id = "mainRef" href="/laravel5-learning/public/">Главная</a> | <a id = "regRef" href="#">Чат</a>
	 <div id = "wrapper">
		 <div id="formContent">
		 <form method="post" action="/laravel5-learning/public/login/message">
			 	{{ csrf_field() }}
			 	<input type="hidden" name="author" value="bot">
				<textarea id="areaCommentary" placeholder="Напишите отзыв" name="content"></textarea>
				<input type="submit" value="Написать" class="myButton">
		 </form>
    </div>
	<div id = "clear">
    </div>
	 <div id = "footer">
		 copyright 2016 chntu Yuri Pilnik
        </div>
</body>
</html>