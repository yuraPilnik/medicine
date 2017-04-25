<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
<!--  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
	 <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
     <link rel="stylesheet" type="text/css" href="{{ asset('css/entryss.css') }}" />    
  <title>Запись на прием</title>
	
 </head>
 <body>
	 <script type="text/javascript">
		function clearField() 
		{
			if(document.getElementById) {
      			document.entryForm.description.value = "";
			}
		}
		 
</script>
	  <div id = "header">
           Запись на прием   
		 </div>
	 <a id = "mainRef" href="/laravel5-learning/public/">Главная</a> | <a id = "mainRef" href="signinPatient">Вход</a>  | <a id = "mainRef" href="#">Запись к врачу</a>
	 <div id = "wrapper"> 
        <div id = "content">
            <form name="entryForm" method="post" action="/laravel5-learning/public/login/result" accept-charset="UTF-8">
				{!! csrf_field() !!}
				@if($answer == 1)
					<div id = "errorFields">	
						Не все поля заполнены!!!				
					</div>
				@elseif($answer == 2)
				<div id = "succesful">Вы успешно записаны на прием. Ожидаем вас в указаное время в Личном кабинете</div>
				@endif
				Выберите дату и время приема: 
				<select name = "date">
					@for($i = 0; $i < 56; $i++)
					<option value = "{!! $dates[$i] !!}"> {!! $dates[$i] !!} </option>
					@endfor			
				</select>
			<p><textarea id = "textArea" placeholder="Опишите проблему" name="description"></textarea></p>
			<p><input type="hidden" name = "name_patient" value="{!! $namePatient !!}">
			<input type="hidden" name = "id_doctor" value="{!! $idDoctor !!}">
			<input type="hidden" name = "id_patient" value="{!! $id_patient !!}">
			<input type="radio" name="type_problem" value="Осмотр"> Осмотр<Br>
   			<input type="radio" name="type_problem" value="Лечение"> Лечение<Br>
   			<input type="radio" name="type_problem" value="Стационар"> Стационар<Br>
				<p><input type="submit" value = "Записаться" class = "myButton" ></p>
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