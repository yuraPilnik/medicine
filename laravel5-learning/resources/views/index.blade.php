<!DOCTYPEhtml PUBLIC "-//W3C//DTD html 4.1 Final//EN">
<html>
<head>
    <title>Клиника "DoctorPro"</title>
    <metahttp-equiv="Content-Type" content="text/html;charset=windows-1251">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" />    
</head>
<body>
    
        <div id = "header">
            Киевская диагностическая клиника - "ProfMedicine"    
        </div>
<!--            <img  src="logo_medicine.png" width="100px" height="100px" id = logo>-->
    <div id = "wrapper">
        <div id = "sidebarL">
            <nav>
                <ul>
                <li><a href = "#">Вход</a>
                    <ul>
                        <li><a href = "login/signinPatient">Пациент</a></li>
                        <li><a href = "login/signinDoctor">Доктор</a></li>
                        <li><a href = "login/signinAdmin">Администратор</a></li>
                    </ul>
                </li>
                <li><a href = "../public/auth/registration">Регистрация</a></li>
                <li><a href = "about">О нас</a></li>
                <li><a href = "login/mentions">Отзывы</a></li>
                <li><a href = "services">Услуги</a></li>
                </ul>
            </nav>
        <div id="addEntry">
			<div id="headWrite">Запись на прием</div>
			<form method="get" action="/laravel5-learning/public/login/signinPatient">
				<input type="submit" value="Записаться" class="myButton" >
				<div id = "text">Еще не зарегистрированы? </div>
				<div id="link"><a href="auth/registration">Зарегистрироваться</a></div>
			</form>
		</div>
		</div>
        <div id = "sidebarR">
            <h2 id = "headContact">Контакты</h3> 
                <p id = "viewContact">Моб.тел:</p>
                    <p id = "contData">+380937613527</p> 
                    <p id = "contData">+380631138688</p> 
                <p id = "viewContact">Skype:</p> 
                    <p id = "contData">Пильник Юрий<p> 
                <p id = "viewContact">Emails:</p> 
                    <p id = "contData">pilnik.iura@mail.ru</p> 
                    <p id = "contData">targonscaya.97@mail.ru</p>
                <p id = "viewContact">Мы в соц. сетях: </p>    
                    <p><a href="https://vk.com/id142881396" target="_blank" id = "logo_vk">
                        <img src="images/logo_vk.png" width = "30px" height="30px"></a>
                        <a href="https://ok.ru/profile/537392991973" target="_blank" id = "logo_od">
                        <img src="images/logo_odn.png" width = "30px" height="30px"></a>
                    </p>        
        
		</div>
        
        <div id = "content">
            <div id = "fotoHome"><img src="images/hospital.jpg" width = "400px"></div>

                <p>Основным подразделением Киевского городского онкологического центра является онкологическая больница на  Верховинной. При ней функционирует поликлиника на 500 посещений в день и стационар на 590 койко-мест. Работает детское   онкологическое отделение на 40 мест. С 2001 года действует хосписное отделение на 10 мест.
                В больнице работает более тысячи сотрудников. Специализированную медицинскую помощь оказывают 218 квалифицированных врачей и научных сотрудников разных специальностей, среди них 8 профессоров, 11 докторов и 27 кандидатов медицинских наук. 58 врачей являются специалистами высшей и первой категорий.
                </p>
                <p>Ежегодно в стационаре больницы проходит лечение более 16 тысяч больных. Хирурги больницы ежегодно выполняют около 5 тысяч операций. Около 5 тысяч больных каждый год получают химиотерапию и 3 тысячи – лучевую терапию.</p>
        </div>
		
        <h1 id = "headNews">Новости</h1>
        <div id = "newsContent">
		<div id="scroling">
             @foreach($newsHome as $new)
            <h2 id = "headtextNews">
                {{$new->title}}
            </h2>
            <p id = "publicTextNews">
                Опубликовано: {{ $new->created_at}}
            </p>
            <p id = "contentTextNews">
                {!!$new->content!!}
            </p>        

@endforeach
		</div>
        </div>
    </div>
        <div id = "clear"></div>
        <div id = "footer">copyright 2016 chntu Yuri Pilnik</div>
</body>
</html>
