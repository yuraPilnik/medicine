<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
<!--  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
	 <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
     <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" />    
  <title>Вход</title>
 </head>
 <body>
	  <div id = "header">
           Аутентификация (Администратор)  
		 </div>
      <a id = "mainRef" href="/laravel5-learning/public/">Главная</a> | <a id = "regRef" href="signinDoctor">Вход</a>
	 <div id = "wrapper"> 
        <div id = "content">
            <form method="post" action="/laravel5-learning/public/login/roomAdmin" accept-charset="UTF-8">
				{!! csrf_field() !!}
				@if($answer == 1)
					<div id = "errorFields">	
						Не все поля заполнены!!!				
					</div>
				@elseif($answer == 2)
					<div id = "errorFields">	
						Неверный логин или пароль. Проверьте правильность введенных данных.			
					</div>
				@endif
				<p><label><input type = "text" name = "login3"  size = "47" placeholder="Логин"></label></p>
				<p><label><input type = "password"  name = "passwd3"  size = "46" placeholder="Пароль"></label></p>
		        <p><input type="submit" value = "Войти" class = "myButton">
            </form>
        </div>
        <div id = "clear">
        </div>
    </div>
	 <div id = "footer">
		 copyright 2016 chntu Yuri Pilnik
        </div>
</body>
</html>