

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="icon" type="img/ico" href="/favicon.ico">

        <title>{{ \TCG\Voyager\Voyager::setting('title', '')  }}</title>

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
                            <li><a href="#skills">@lang('main.skills')</a></li>
                            <li><a href="#about_me">@lang('main.about_me')</a></li>
                            <li><a href="#portfolio">@lang('main.portfolio')</a></li>
                            <li><a href="#contacts">@lang('main.contacts')</a></li>
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
                                <p>{{ $email }}</p>
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
                <h1 class="animated bounceInLeft">{{ \TCG\Voyager\Voyager::setting('header_title', '') }}</h1>
                <h2 class="animated bounceInRight">{{ \TCG\Voyager\Voyager::setting('header_subtitle', '') }}</h2>
            </div>
        </header>

        <div id="skills">
            <div class="container">
            <div class="title-wrapper"><h3 class="title animated fadeIn">@lang('main.my_skills')</h3></div>
            <div class="tabs-wrapper"><ul class="tabs">
                <li class="tab active">@lang('main.all_skills')</li>
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

            <div class="btn-bo-wrapper"><div class="btn-bo">@lang('main.show_all')</div></div>
        </div>
        </div>

        <div id="about_me">
            <div class="about-me">
                <div class="container">
                    <div class="title-wrapper"><h3 class="title title-white animated fadeIn">@lang('main.about_me')</h3></div>
                    <p class="description animated fadeIn">{{ $about_me_short }}</p>
                    <div class="btn-bo-wrapper"><div class="btn-bo btn-bo-white">@lang('main.more')</div></div>
                </div>
            </div>
        </div>

        <div id="portfolio">
            <div class="container">
            <div class="title-wrapper"><h3 class="title animated fadeIn">@lang('main.my_portfolio')</h3></div>
            <div class="tabs-wrapper"><ul class="tabs">
                <li class="tab active">@lang('main.all_projects')</li>
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
                                    <p class="project-gist"><b>@lang('main.gist'):</b> Калькулятор шин и дисков. Подбор размеров шин и дисков под авто
                                    </p>
                                    <p class="project-description"><b>@lang('main.description'):</b> Приложение создано исключительно для предоставления информации пользователям. В приложении используется SQLite База данных чтобы предоставить пользователю информацию в offline режиме.
                                    </p>
                                </div>
                                <div class="btn-bo-wrapper"><div class="btn-bo btn-bo-white">
                                    <a href="https://play.google.com/store/apps/details?id=info.tyretrader.assistant" target="_blank">@lang('main.look')</a>
                                </div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-bo-wrapper"><div class="btn-bo">@lang('main.show_all')</div></div>
            </div>
        </div>
        </div>

        <div id="contacts">
            <div class="container">
                <div class="title-wrapper"><h3 class="title title-white animated fadeIn">@lang('main.contacts')</h3></div>
                <div class="row">
                    <div class="col-sm-6">
                        <a class="contact animated bounceInLeft" href="mailto:{{ $email }}">
                            <h3>Email</h3>
                            <p>{{ $email }}</p>
                            <div class="ico ico-s-mail"></div>
                        </a>
                        <a class="contact animated bounceInLeft" href="skype:{{ $skype }}">
                            <h3>Skype</h3>
                            <p>{{ $skype }}</p>
                            <div class="ico ico-s-skype"></div>
                        </a>
                        <div class="social">
                            <a class="contact animated bounceInLeft" href="https://vk.com/bodev_pro" target="_blank"><div class="ico ico-s-vk"></div></a>
                            <a class="contact animated bounceInLeft" href="https://www.facebook.com/bodev.pro" target="_blank"><div class="ico ico-s-fb"></div></a>
                            <a class="contact animated bounceInLeft" href="https://www.instagram.com/olehstail/" target="_blank"><div class="ico ico-s-insta"></div></a>
                            <a class="contact animated bounceInLeft" href="https://www.linkedin.com/in/oleg-borisenko-723086129/" target="_blank"><div class="ico ico-s-in"></div></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form role="form" method="POST">
                            <div class="form-group float-label-control">
                                <input name="name" type="text" class="form-control empty" placeholder="Name">
                                <label for="">Name</label>
                            </div>
                            <div class="form-group float-label-control">
                                <input name="email" type="email" class="form-control empty" placeholder="Email">
                                <label for="">Email</label>
                            </div>
                            <div class="form-group float-label-control">
                                <textarea name="message" class="form-control empty" rows="3"></textarea>
                                <label for="">Message</label>
                            </div>
                            <div class="btn-bo-wrapper"><button class="btn-bo btn-bo-white">Отправить</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>
                <span>Made by Borisenko Oleg
                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;</span>
                Copyright © 2017
                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
                All rights reserved
            </p>
        </footer>
    </body>
</html>
