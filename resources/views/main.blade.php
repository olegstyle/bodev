

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="img/ico" href="/favicon.ico">

        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#4cc3bf">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#4cc3bf">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#4cc3bf">

        <title>{{ $seo_title }}</title>
        <meta property="og:title" content="{{ $seo_title }}" />
        <meta name="title" content="{{ $seo_title }}" />
        <meta itemprop="name" content="{{ $seo_title }}">

        <meta name="description" content="{{ $seo_description }}" />
        <meta property="og:description" content="{{ $seo_description }}" />
        <meta itemprop="description" content="{{ $seo_description }}">

        <meta name="keywords" content="{{ $seo_keywords }}" />
        <meta property="og:keywords" content="{{ $seo_keywords }}" />
        <meta itemprop="keywords" content="{{ $seo_keywords }}">

        <link rel="image_src" href="{{ $seo_image }}" />
        <meta property="og:image" content="{{ $seo_image }}" />
        <meta itemprop="image" content="{{ $seo_image }}">

        <script type="text/javascript">
            BODev = {};
            BODev.Lang = {
                name_empty: "@lang('main.name_empty')",
                email_empty: "@lang('main.email_empty')",
                email_invalid: "@lang('main.email_invalid')",
                message_empty: "@lang('main.message_empty')",
                send_success: "@lang('main.send_success')",
                sending: "@lang('main.start_sending')"
            };
        </script>

        <!-- Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet"-->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/perfect-scrollbar.min.css" rel="stylesheet">
        <link href="/css/perfect-scrollbar.min.css" rel="stylesheet">
        <link href="/css/animate.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="icon-wrapper">
                    <img src="/images/logo.png" width="142" height="67" alt="bodev icon">
                    <div class="lang-wrapper">
                        <span class="lang @if($locale == 'en') active @endif" data-lang="en">EN</span>
                        <span class="lang @if($locale == 'ru') active @endif" data-lang="ru">RU</span>
                    </div>
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
                                <p>Borysenko Oleh</p>
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
                <li class="tab active" data-group="0">@lang('main.all_skills')</li>
                @foreach($tech_groups as $group)
                    <li class="tab"
                        data-group="{{  $group['id'] }}">
                        {{ $group['name'] }}
                    </li>
                @endforeach
                <hr />
            </ul></div>

            <div id="skills-grid" class="skills-wrapper row">
                @foreach($tech_stacks as $stack)
                    <div class="mix skill-group skill-group-{{ $stack['group_id'] }} col-lg-2 col-md-3 col-sm-3 col-xs-4 animated" @if($loop->index >= 6) style="display: none" @endif>
                        <div class="skill" data-id="{{ $stack['id'] }}">
                            <div class="image-wrapper"><img src="{{ $stack['image_url'] }}" alt="{{ $stack["name"] }}" /></div>
                            <h4>{{ $stack['name'] }}</h4>
                            <div class="lvl">{{ $stack['level'] }}</div>
                            <div class="time">{!! $stack['start'] !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="btn-bo-wrapper"><div class="btn-bo">@lang('main.show_all')</div></div>
        </div>
        </div>

        <div id="about_me">
            <div class="about-me">
                <div class="container">
                    <div class="title-wrapper"><h3 class="title title-white animated fadeIn">@lang('main.about_me')</h3></div>
                    <p class="description animated fadeIn">{!! $about_me_short !!}</p>
                    @if(!empty(trim($about_me_long)))
                        <div class="btn-bo-wrapper"><div class="btn-bo btn-bo-white">@lang('main.more')</div></div>
                    @endif
                </div>
            </div>
        </div>

        <div id="portfolio">
            <div class="container">
            <div class="title-wrapper"><h3 class="title animated fadeIn">@lang('main.my_portfolio')</h3></div>
            <div class="tabs-wrapper"><ul class="tabs">
                <li class="tab active" data-group="0">@lang('main.all_projects')</li>
                @foreach($tech_stacks as $ts)
                    <li class="tab"
                        data-group="{{ $ts['id'] }}">
                        {{ $ts['name'] }}
                    </li>
                @endforeach
                <hr />
            </ul></div>
            <div class="projects-wrapper">
                <div id="portfolio-grid" class="row">
                    @foreach($projects as $p)
                        <div class="mix col-lg-3 col-md-4 col-sm-6 col-xs-12 project-group @foreach($p['groups'] as $g) project-group-{{ $g }} @endforeach" @if($loop->index >= 4) style="display: none" @endif>
                            <div class="project animated-fast" data-id="{{ $p['id'] }}" style="background-image: url('{{ $p['image_url'] }}');">
                                <div class="project-mini-info animated-fast">
                                    <div class="bg animated-fast"></div>
                                    <div class="project-content">
                                        <h4 class="project-name">{{ $p['name'] }}</h4>
                                        <p class="project-gist"><b>@lang('main.gist'):</b> {{ $p['gist'] }}</p>
                                        @if(!empty($p['description']))
                                            <p class="project-description"><b>@lang('main.description'):</b> {!! $p['description'] !!}</p>
                                        @endif
                                        @if(!empty($p['date_start']) && $p['date_start'] != '0000-00-00')
                                            <p class="project-start"><b>@lang('main.date_start'):</b> {{ $p['date_start'] }}</p>
                                        @endif
                                        @if(!empty($p['date_end']) && $p['date_end'] != '0000-00-00')
                                            <p class="project-end"><b>@lang('main.date_end'):</b> {{ $p['date_end'] }}</p>
                                        @endif
                                        @if(!empty($p['stack']))
                                            <p class="project-tech-stack">
                                                <b>@lang('main.technology_stack'):</b>
                                                @foreach($p['stack'] as $s)
                                                    <img src="{{ $s['image_url'] }}" title="{{ $s['name'] }}" alt="{{ $s['name'] }}" />
                                                @endforeach
                                            </p>
                                        @endif
                                        @if(!empty($p['link']))
                                            <div class="btn-bo-wrapper"><div class="btn-bo btn-bo-white">
                                                    <a href="{{ $p['link'] }}" rel="nofollow" target="_blank">@lang('main.look')</a>
                                                </div></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <a class="contact animated bounceInLeft" href="https://vk.com/bodev_pro" rel="nofollow" target="_blank"><div class="ico ico-s-vk"></div></a>
                            <a class="contact animated bounceInLeft" href="https://www.facebook.com/bodev.pro" rel="nofollow" target="_blank"><div class="ico ico-s-fb"></div></a>
                            <a class="contact animated bounceInLeft" href="https://www.instagram.com/olehstail/" rel="nofollow" target="_blank"><div class="ico ico-s-insta"></div></a>
                            <a class="contact animated bounceInLeft" href="https://www.linkedin.com/in/bodev/" rel="nofollow" target="_blank"><div class="ico ico-s-in"></div></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form id="contact-me" role="form" method="POST">
                            <div class="form-group float-label-control">
                                <input name="name" type="text" class="form-control empty" placeholder="Name">
                                <label for="">Name</label>
                            </div>
                            <div class="form-group float-label-control">
                                <input name="email" type="email" class="form-control empty" placeholder="Email">
                                <label for="">Email</label>
                            </div>
                            <div class="form-group float-label-control has-error">
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
                <span>Made by Borysenko Oleh
                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;</span>
                Copyright © 2017
                &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
                All rights reserved
            </p>
        </footer>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-92535217-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/perfect-scrollbar.jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.mixitup.js"></script>
<script type="text/javascript" src="/js/jquery.mixitup.pagination.js"></script>
<script type="text/javascript" src="/js/toastr.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>

<link href="/css/toastr.min.css" rel="stylesheet">