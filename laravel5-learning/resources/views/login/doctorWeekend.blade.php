<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
<!--  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
	 <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
     <link rel="stylesheet" type="text/css" href="{{ asset('css/weekend.css') }}" />    
  <title>Вход</title>
 </head>
 <body>
        <div id = "weekend">
        	Внимание!!!
			Вы были отмечены как 
			@if($workState == 0)
				<span>НЕ РАБОТСПОСОБНЫ</span>
			@else($workState == 1)
				<span>РАБОТСПОСОБНЫ</span>
			@endif
			<div>Перед тем как выйти на роботу <span>ОБЯЗАТЕЛЬНО</span> измение свой статус в Личном кабинете.</div>
        </div>
      
</body>
</html>