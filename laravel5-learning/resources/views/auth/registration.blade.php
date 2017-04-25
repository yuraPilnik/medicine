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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/regs.css') }}" />
    <title>Регистрация</title>
</head>

<body>
    <div id="header">
        Регистрация нового пользователя
    </div>
    <a id="mainRef" href="/laravel5-learning/public/">Главная</a> | <a id="regRef" href="registration">Регистрация</a>
    <div id="wrapper">
        <div id="content">
            <form method="post" action="/laravel5-learning/public/auth/resreg" accept-charset="UTF-8">
                {!! csrf_field() !!} @if($error == 1)
                <div id="succesful">Добро пожаловать, {!! $name !!}. Регистрация прошла успешно.</div>
                @elseif($error == 2)
                <div id="error">Ошибка! Не все поля заполнены! </div>
                @elseif($error == 3)
                <div id="error">Пользователь с такой почтой или логином уже зарегистрирован.</div>
                @elseif($error == 4)
                <div id="error">Некоректно заполнены поля паролей</div>
                @endif
                <p><label><input type = "text" name = "name"   placeholder="Фамилия Имя Отчество"></label></p>
                <p><label><input type = "email" name = "email" placeholder="Email"></label></p>
                <p><label><input type = "text"  name = "login" placeholder="Логин"></label></p>
                <p><label><input type = "password"  name = "password1" placeholder="Пароль"></label></p>
                <p><label><input type = "password" name = "password2" placeholder="Введите пароль ещё раз"></label></p>
                <p><label><input type = "number" name = "age"  placeholder="Возраст"></label></p>
                <div id="buttons">
                    <p><input type="submit" value="Зарегистрироватmься" class="myButton">
                        <div id="text">Уже зарегистрированы? <a href="../login/signinPatient">Войти на сайт</a></div>
                </div>
            </form>
        </div>
        <div id="contentPrivileges">
            После регистрации вы сможете:
            <ul id="ul1">
                <li>Записываться к врачу в удобное для вас время;</li>
            </ul>
            <ul id="ul2">
                <li>Участвовать в оценивании докторов и клиник;</li>
            </ul>
            <ul id="ul3">
                <li>Составлять свои списки избранных докторов и клиник;</li>
            </ul>
            <ul id="ul1">
                <li>Писать отзывы и рекомендации.</li>
            </ul>
            <ul id="ul1">
                <li>Вести историю посещений</li>
            </ul>
        </div>
        <div id="clear">
        </div>
    </div>
    <div id="footer">
        copyright 2016 chntu Yuri Pilnik
    </div>
</body>

</html>