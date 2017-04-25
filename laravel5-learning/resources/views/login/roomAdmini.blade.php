<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <style>
        #ul1 {
            font: 20px serif;
            list-style-image: url(../icon-note_refistr.png);
        }
        
        #ul2 {
            font: 20px serif;
            list-style-image: url(../icon-star_registr.png);
        }
        
        #ul3 {
            font: 20px serif;
            list-style-image: url(../icon-heart_registr.png);
        }
    </style>
    <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}" />
    <title>Администратор</title>
</head>

<body>
    <div id="header">
        Личный кабинет администратора
    </div>
    <a id="mainRef" href="/laravel5-learning/public/">Главная</a> | <a id="regRef" href="registration">Регистрация</a>
    <div id="wrapper">
        <div id="sidebarL">
            <div class="korpus">
                <input type="radio" name="odin" checked="checked" id="vkl1" />
                <label for="vkl1">Добавить Врача</label>
                <input type="radio" name="odin" id="vkl2" />
                <label for="vkl2">Удалить Врача</label>
                <div>
                    <div id="content">
                        <form method="post" action="/laravel5-learning/public/login/roomAdmins" accept-charset="UTF-8">
                            @if($answer == 1)
                            <div id="error">Внимание!!! Не все поля заполнены!!!</div>
                            @elseif($answer == 2)
                            <div id="error">Внимание!!! НЕКОРЕКТНО введен пароль!!!</div>
                            @elseif($answer == 3)
                            <div id="succesful">Доктор был успешно ДОБАВЛЕН!!!</div>
                            @elseif($answer == 4)
                            <div id="error">Внимание!!! Уже существует доктор с таким логином или email!!!</div>
                            @endif {!! csrf_field() !!}
							<span id="text">Специальность:</span>
							<select id="specialitySelect" name="specialyty">
								<option value=""></option>
								<option value="педиатр">Педиатр</option>
								<option value="стоматолог">Стоматолог</option>
								<option value="хирург">Хирург</option>
								<option value="нервопатолог">Нервопатолог</option>
								<option value="психолог">Психолог</option>
							</select>
                            <p><input type="text" name="name" placeholder="Фамилия Имя Отчество"></p>
                            <p><input type="email" name="email" placeholder="Email"></p>
                            <p><input type="text" name="login" placeholder="Логин"></p>
                            <p><input type="password" name="password1" placeholder="Пароль"></p>
                            <input type="hidden" value="{!! $login3 !!}" name="login3">
                            <input type="hidden" value="{!! $passwd3 !!}" name="passwd3">
                            <p><input type="password" name="password2" placeholder="Введите пароль ещё раз"></p>
                            <p><input type="number" name="standing" placeholder="Стаж"></p>
                            <p><input type="hidden" name="idAdmin" value="{!! $idAdmin !!}"></p>
                            <p><input type="hidden" name="action" value="addDoctor"></p>
                            <p><input type="hidden" name="workingState" value="1"></p>
							
                            <textarea id="character" placeholder="Характеристика врача" name="description"></textarea>
                            <div id="buttons">
                                <p><input type="submit" value="Внести в список" class="myButton" onClick="clearform();"></div>
                        </form>
                    </div>
                </div>
                <div>
                    <div id="content">
                        <form method="post" action="/laravel5-learning/public/login/roomAdmins" accept-charset="UTF-8">
                            @if($answer == 5)
                            <div id="error">Внимание!!! Не все поля заполнены!!!</div>
                            @elseif($answer == 6)
                            <div id="error">Внимание!!! Логины не одинаковы!!!</div>
                            @elseif($answer == 7)
                            <div id="error">Внимание!!! Отсутствует доктор с таким логином!!!</div>
                            @elseif($answer == 8)
                            <div id="succesful">Внимание!!! Доктор был успешно удален!!!</div>
                            @endif {!! csrf_field() !!}
                            <p><input type="text" name="login1" placeholder="Введите логин для удаления"></p>
                            <p><input type="text" name="login2" placeholder="Повторите ввод логина"></p>
                            <p><input type="hidden" name="idAdmin" value="{!! $idAdmin !!}"></p>
                            <input type="hidden" value="{!! $login3 !!}" name="login3">
                            <input type="hidden" value="{!! $passwd3 !!}" name="passwd3">
                            <p><input type="hidden" name="action" value="delDoctor"></p>
                            <p><input type="hidden" name="workingState" value="1"></p>
                            <div id="buttons">
                                <p><input type="submit" value="Удалить из списка" class="myButton" onClick="clearform();">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="korpus1">
            <input type="radio" name="odin1" checked="checked" id="vkl11" />
            <label for="vkl11" id="tabfirst">Панель Отзывов</label>
            <input type="radio" name="odin1" id="vkl22" />
            <label for="vkl22">Публикация Новостей</label>
            <input type="radio" name="odin1" id="vkl33" />
            <label for="vkl33">Удаление Новостей</label>
            <div>
				<div id="scroling">
                <div id="commentsPanel">
                    @if(count($array_comments) >= 1)
                    <div id="hide">
                        {{$i = 0}}
                    </div>
                    @for(;$i
                    < count($array_comments);) @for(; $i < count($array_names);) @break; @endfor @for(; $i < count($array_dates);) @break; @endfor @for(; $i < count($array_ids);) @break; @endfor @for(; $i < count($ids);) @break; @endfor @for(; $i < count($access_commentary);) @break; @endfor <div id="blockComments">
                        <p>
                            <div id="commentaryBlock">{!! $array_comments[$i] !!} </div>
                        </p>
					<div id="nameBlock"><b>Автор:</b> {!! $array_names[$i] !!} <b>Опубликовано:</b> {!! $array_dates[$i] !!}</div>
                        <form method="post" action="/laravel5-learning/public/login/delComment">
                            {!! csrf_field() !!}
                            <input type="hidden" value="{!! $ids[$i] !!}" name="id_comment">
                            <input type="hidden" value="{!! $login3 !!}" name="login3">
                            <input type="hidden" value="{!! $passwd3 !!}" name="passwd3">
                            <input type="submit" value="Удалить" class="myButton1">
                        </form>

                        <form method="post" action="/laravel5-learning/public/login/blockingPatient">
                            <span>@if($access_commentary[$i] == 1)</span> {!! csrf_field() !!}
                            <input type="hidden" value="{!! $login3 !!}" name="login3">
                            <input type="hidden" value="1" name="stateEditable">
                            <input type="hidden" value="{!! $passwd3 !!}" name="passwd3">
                            <input type="hidden" name="id_patient" value="{!! $array_ids[$i] !!}">
                            <input type="submit" value="Закрыть доступ к отзывам" class="myButton1"> @else if($access_commentary[$i] == 0) {!! csrf_field() !!}
                            <input type="hidden" value="{!! $login3 !!}" name="login3">
                            <input type="hidden" value="0" name="stateEditable">
                            <input type="hidden" value="{!! $passwd3 !!}" name="passwd3">
                            <input type="hidden" name="id_patient" value="{!! $array_ids[$i] !!}">
                            <input type="submit" value="Открыть доступ к отзывам" class="myButton1"> @endif
                        </form>
                </div>
                <div id="hide">
                    {{$i++}}
                </div>
                @endfor @endif
            </div>
			
			</div>
			
        </div>
        <div>
             <div id="commentsPanel" >
				 <form method="post" action="/laravel5-learning/public/login/publishNews">
					    {!! csrf_field() !!}
					 	@if($answer == 9)
					 		<div id="error">Внимание!!! Не все поля заполнены!!!</div>
					 	@elseif($answer == 10)
					 		<div id="succesful">Новость была ОПУБЛИКОВАНА</div>
                       	@endif 
					 	<input type="hidden" value="{!! $login3 !!}" name="login3">
					 	<input type="text" name="title" id="titleNews" placeholder="Заголовок">
                        <input type="hidden" value="{!! $passwd3 !!}" name="passwd3">
					 	<textarea  placeholder="Новость" name="contentNews" id="newsForm"></textarea>
					 	<input type="submit" value="Опубликовать" class="myButton1">
				 </form>
             </div>
        </div>
		
		<div>
			<div id="commentsPanel" >
				 <form method="post" action="/laravel5-learning/public/login/DelNews">
					  	{!! csrf_field() !!}
					 	@if($answer == 11)
					 		<div id="error">Внимание!!! Не все поля заполнены!!!</div>
					 	@elseif($answer == 13)
					 		<div id="error">Внимание!!! Такая новость НЕ опубликована!!!</div>
					 	@elseif($answer == 12)
					 		<div id="succesful">Новость была УДАЛЕНА</div>
                       	@endif 
					 	<input type="hidden" value="{!! $login3 !!}" name="login3">
					 	<input type="text" name="title" id="titleNews" placeholder="Заголовок">
                        <input type="hidden" value="{!! $passwd3 !!}" name="passwd3">
                        <input type="text" name="publishDate" placeholder="Дата и время публикации"  id="titleNews">
					 	<input type="submit" value="Удалить" class="myButton1">
				 </form>
             </div>
			</div>
	</div>
    </div>
    </div>
    <div id="clear">
    </div>
    
	<div id="footer">
        copyright 2016 chntu Yuri Pilnik
    </div>
</body>

</html>