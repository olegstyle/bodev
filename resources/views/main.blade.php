<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Борисенко Олег - Full Stack Developer</title>

        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/animate.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="icon-wrapper">
                    <img src="/images/logo.png" width="142" height="67" alt="bodev icon">
                    <div class="header-menu-wrapper">
                        <div class="hamburger"></div>
                        <ul class="header-menu">
                            <li><a href="#skills">Навыки</a></li>
                            <li><a href="#about_me">Обо мне</a></li>
                            <li><a href="#portfolio">Портфолио</a></li>
                            <li><a href="#contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bodev">
                    <div class="photo"></div>
                    <div class="info-wrapper">
                        <div class="col-sm-4">
                            <div class="info info-right-align animated bounceInLeft">
                                <h3>Full Name</h3>
                                <p>Borisenko Oleg</p>
                                <div class="ico ico-profile"></div>
                            </div>
                            <div class="info info-right-align animated bounceInLeft">
                                <h3>Email</h3>
                                <p>olegstyle1@gmail.com</p>
                                <div class="ico ico-mail"></div>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="info animated bounceInRight">
                                <h3>Birthday</h3>
                                <p>22.10.1994</p>
                                <div class="ico ico-birthday"></div>
                            </div>
                            <div class="info animated bounceInRight">
                                <h3>Birth Place</h3>
                                <p>Dnipro, Ukraine</p>
                                <div class="ico ico-place"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="animated bounceInLeft">FULL STACK DEVELOPER</h1>
                <h2 class="animated bounceInRight">frontend development • backend development • android development • iOS development</h2>
            </div>
        </header>
        <div class="container">
            <div class="title-wrapper"><h3 class="title animated fadeIn">Мои навыки</h3></div>
            <div class="tabs-wrapper"><ul class="tabs">
                <li class="tab active">Все навыки</li>
                <li class="tab">Backend</li>
                <li class="tab">Frontend</li>
                <hr />
            </ul></div>

            <div class="skills-wrapper row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                    <div class="skill">
                        <img src="/images/html5.png" />
                        <h4>HTML</h4>
                        <div class="lvl">Strong</div>
                        <div class="time">4 years<br>1 month</div>
                    </div>
                </div>
            </div>

            <div class="btn-bo-wrapper"><div class="btn-bo">Показать все</div></div>
        </div>

        <div class="about-me">
            <div class="container">
                <div class="title-wrapper"><h3 class="title title-white animated fadeIn">Обо мне</h3></div>
                <p class="description animated fadeIn">Когда мне было еще 6 лет у меня была Sega Mega Drive и я уже тогда догадывался что картридж - это всего лишь устройство для хранения информации. Тогда я думал что когда повзрослею буду делать картриджи!) Время шло и как-то я об этой затеи и забыл. Слишком молод был)
                    Когда мне было 10 лет я увидел объявление в газете “Ищем программиста” и сразу же побежал к маме спросить кто же такой этот “Программист”. Как только я узнал что эта профессия связана с компьютерами у меня появилась мечта и соответственно цель: Стать программистом!
                </p>
                <div class="btn-bo-wrapper"><div class="btn-bo btn-bo-white">Подробнее</div></div>
            </div>
        </div>

        <div class="container">
            <div class="title-wrapper"><h3 class="title animated fadeIn">Портфолио</h3></div>
            <div class="tabs-wrapper"><ul class="tabs">
                <li class="tab active">Все навыки</li>
                <li class="tab">Backend</li>
                <li class="tab">Frontend</li>
                <hr />
            </ul></div>
            <div class="projects-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="project" style="background-image: url('/images/tyretrader-assistant-android.png');">
                            <div class="project-mini-info animated">
                                <div class="bg animated"></div>
                                <div class="project-content">
                                    <h4 class="project-name">TyreTrader assistant</h4>
                                    <p class="project-gist"><b>Суть проекта:</b> Калькулятор шин и дисков. Подбор размеров шин и дисков под авто
                                    </p>
                                    <p class="project-description"><b>Описание:</b> Приложение создано исключительно для предоставления информации пользователям. В приложении используется SQLite База данных чтобы предоставить пользователю информацию в offline режиме.
                                    </p>
                                </div>
                                <div class="btn-bo-wrapper"><div class="btn-bo btn-bo-white">
                                    <a href="https://play.google.com/store/apps/details?id=info.tyretrader.assistant" target="_blank">Посмотреть</a>
                                </div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-bo-wrapper"><div class="btn-bo">Показать все</div></div>
            </div>
        </div>
    </body>
</html>
