<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
	 <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
     <link rel="stylesheet" type="text/css" href="{{ asset('css/room.css') }}" />    
  <title>Вход</title>
 </head>
 <body>
	  <div id = "header">
           Мой профиль 
		 </div>
      
		   @if($patient == true)
	 <a id = "mainRef1" href="/laravel5-learning/public/">Главная</a> | <a id = "mainRef" href="signinPatient">Вход(пациент)</a> | <a id = "mainRef" href="signinDoctor"> Вход(врач)</a> | <a id = "regRef" href="#">Личный кабинет</a>
	 			<div id = 'myAccount'>
		 			<nav>
		  				<ul>
                			<li><a href = "#">Мой профиль: {!! $loginPatient !!}</a>
                    		<ul>
                        	<li><a href = "signinPatient">Выйти</a></li>
                    		</ul>
                			</li>
		 				</ul>
		 			</nav>
			   </div>
		 		@if(count($ids) != 0)		
	 				<div id="tableLocation">  
					<table border="1" cellspacing=0>	
   					<caption id="head">Таблица записей на прием</caption>
   					<tr>
						<th id="cell">Номер</th>
    					<th id="cell">Тип приема</th>
    					<th id="cell">Дата и время</th>
    					<th id="cell">Действия</th>
   					</tr>		
					<div id = hide>	
						{{$j=0}}
						{{ $k=0}}
					</div>
					@for($i = 0; $i < count($ids); $i++)					   
						@for(;$j < count($types);)
				 		@break
				 	@endfor
				 	@for(;$k < count($dates);)
											  <tr><td id="cell">{!! $i+1 !!}</td><td id="cell">{!! $types[$j] !!}</td><td id="cell">{!! $dates[$k] !!}</td>
						<td id="cellDel">
							<form method="post" action="/laravel5-learning/public/login/delEntry" accept-charset="UTF-8">
								{!! csrf_field() !!}
								<input type="hidden" name="id_del" value="{!! $ids[$k] !!}">
								<input type="hidden" name="password" value="{!! $password !!}">
								<input type="hidden" name="login" value="{!! $loginPatient !!}">
								<input class="myButton2" type="submit" value="Снятся с записи">
							</form>
						</td>
						</tr>
						<div id="hide">
						{{ $k++ }}
				 		{{ $j++ }}
		 				</div>
		 				@break
				 	@endfor
		 			@endfor
  					</table>
	 				</div>
	 			@endif
	 		@if(count($array_name) != 0)
			<div id = "content">
				
			@for($u = 0; $u < count($array_specialtys_uniq); $u++)	
				<div id="SpecialtyDoctor">Специальность: {!! $array_specialtys_uniq[$u] !!}</div>
				@for($i = 0; $i < count($array_ids); $i++)
				@if($array_specialtys_uniq[$u] == $array_specialtys[$i])
				<div id = "blockdoctor">
            	<div id = "fotoAnonim"><img src="../ava.jpg" width = "180px"></div>				
					<p>Фамилия Имя Отчество: {!! $array_name[$i] !!}</p>
					<p>Стаж работы: {!! $array_standing[$i] !!} лет</p>
					<div id="character"><p><b>Характеристика:</b> {!! $array_description[$i] !!}</p></div>
					<form method="post" action="/laravel5-learning/public/login/entry" accept-charset="UTF-8" target="_blank">
						{!! csrf_field() !!}
						<input type="hidden" value="{!! $array_ids[$i]!!}" name="idDoctor">
						<input type="hidden" value="{!! $id_patient !!}" name="id_patient">
						<input type="hidden" value = "{!! $namePatient !!}" name="namePatient"> 
						<input type="submit" id = "inpt" value="Записаться">
					</form>
					<form method="post" action="/laravel5-learning/public/login/comment" accept-charset="UTF-8" >
						{!! csrf_field() !!}
						<input type="submit" value="Отзывы" id="inpt1">
						<input type="hidden" value="{!! $array_ids[$i]!!}" name="idDoctor">
						<input type="hidden" value="{!! $id_patient !!}" name="idPatient">
						<input type="hidden" value = "{!! $namePatient !!}" name="namePatient"> 
					</form>
				</div>
				@endif
				@endfor
			@endfor	
			@endif	
			@elseif($patient == false)
<div id="menu"><a id = "mainRef1" href="/laravel5-learning/public/">Главная</a> | <a id = "mainRef" href="signinPatient">Вход(пациент)</a> | <a id = "mainRef" href="signinDoctor"> Вход(врач)</a> | <a id = "regRef" href="#">Личный кабинет</a>
	</div>
	 			<div id = 'myAccount'>
		 			<nav>
		  				<ul>
                			<li><a href = "#">Мой профиль: {!! $loginDoctor !!}</a>
                    		<ul>
                        	<li><a href = "signinDoctor">Выйти</a></li>
                    		</ul>
                			</li>
		 				</ul>
		 			</nav>
			   </div>
				@if(count($array_dates) != 0)
	 			<div id="tableDocLocation">
	 			<table border="1" cellspacing=0 id="tableDoc">	
   					<caption id="head">Таблица актуальных записей на прием</caption>
   					<tr>
						<th id="cell">Номер</th>
    					<th id="cell">Имя пациента</th>
    					<th id="cell">Описание проблемы</th>
    					<th id="cell">Дата приема</th>
    					<th id="cell">Тип записи</th>
   					</tr>		
					<div id = hide>	
						{{$j=0}}
						{{ $k=0}}
						{{ $f=0}}
						{{ $t=0}}
					</div>
					@for($i = 0; $i < count($array_names); $i++)					   
						@for(;$j < count($array_dates);)
				 		@break
				 		@endfor
				 		@for(;$k < count($array_description);)
							@break								  
				 		@endfor
						@for(;$t < count($array_types);)
							@break								  
				 		@endfor
				 		@for(;$f < count($array_dates);)
														<tr><td id="cell">{!! $i+1 !!}</td><td id="cell">{!! $array_names[$j] !!}</td><td id="cell">{!! $array_description[$k] !!}</td><td id="cell">{!! $array_dates[$f] !!}</td><td id="cell" ><div id = "cellDescroption">{!! $array_types[$t] !!}</div></td></tr>
						<div id="hide">
						{{ $k++ }}
				 		{{ $j++ }}
				 		{{ $f++ }}
				 		{{ $t++ }}
		 				</div>
		 				@break
				 	@endfor
		 			@endfor
  					</table>
					</div>
					@endif
					<div id="leftBlock">
					<div id="workingState">
						<p>Если у вас возникла <span>ЧЕРЕЗВЫЧАЙНАЯ СИТУАЦИЯ</span></p> <p>Hапример Вы(заболели или другая уважительная причина <span>ИЗМЕНИЕ</span> флаг работоспособности.)</p>
						<form method="post" action="/laravel5-learning/public/login/doctorState" target="_blank">
							{!! csrf_field() !!}
							Ваша работоспособность:  
							<select name="workState">
								@if($workState == 1)
									<option value="1">Работаю</option>
									<option value="0">Не работаю</option>
								@else if($workState == 0)
									<option value="0">Не работаю</option>
									<option value="1">Работаю</option>
								@endif
							</select>
							<input type="hidden" value="{!! $idDocotor !!}" class="myButton1" name="idDoctor">
							<input type="submit" value="Изменить" class="myButton1">
						</form>
					</div>
						<div id="oath"><p><b>Клятва Гиппократа</b></p>«Клянусь Аполлоном, врачом Асклепием, Гигиеей и Панакеей, всеми богами и богинями, беря их в свидетели, исполнять честно, соответственно моим силам и моему разумению, следующую присягу и письменное обязательство: считать научившего меня врачебному искусству наравне с моими родителями, делиться с ним своими достатками и в случае надобности помогать ему в его нуждах; его потомство считать своими братьями, и это искусство, если они захотят его изучать, преподавать им безвозмездно, и без всякого договора; наставления, устные уроки и всё остальное в учении сообщать своим сыновьям, сыновьям своего учителя и ученикам, связанным обязательством и клятвой по закону медицинскому, но никому другому.

		Я направляю режим больных к их выгоде сообразно с моими силами и моим разумением, воздерживаясь от причинения всякого вреда и несправедливости. Я не дам никому просимого у меня смертельного средства и не покажу пути для подобного замысла; точно так же я не вручу никакой женщине абортивного пессария. Чисто и непорочно буду я проводить свою жизнь и своё искусство. Я ни в коем случае не буду делать сечения у страдающих каменной болезнью, предоставив это людям, занимающимся этим делом. В какой бы дом я ни вошел, я войду туда для пользы больного, будучи далёк от всякого намеренного, неправедного и пагубного, особенно от любовных дел с женщинами и мужчинами, свободными и рабами.

		Что бы при лечении — а также и без лечения — я ни увидел или ни услышал касательно жизни людской из того, что не следует когда-либо разглашать, я умолчу о том, считая подобные вещи тайной. Мне, нерушимо выполняющему клятву, да будет дано счастье в жизни и в искусстве и слава у всех людей на вечные времена, преступающему же и дающему ложную клятву да будет обратное этому»</div>
					</div>
					<div id="rightBlock">
					<div id=commentHeader>Отзывы пациентов о Вас.</div>
					<div id = "content1">
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
	 </div>
<!--		 </div>-->

     	<div id = "clear">
        </div>
	 <div id = "footer">
		 copyright 2016 chntu Yuri Pilnik
        </div>
	 </body>
</html>
