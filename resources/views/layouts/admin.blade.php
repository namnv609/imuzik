<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="iMuzik">
        <meta name="author" content="NamNV609">
        <meta name="keyword" content="imuzik, namnv609">
        <link rel="shortcut icon" href="/favicon.ico">
        <title>iMuzik - Share music. Share feelings</title>
        <link href="{{ asset("css/admin/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/admin/bootstrap-theme.css") }}" rel="stylesheet">
        <link href="{{ asset("css/admin/elegant-icons-style.css") }}" rel="stylesheet" />
        <link href="{{ asset("css/admin/style.css") }}" rel="stylesheet">
        <link href="{{ asset("css/admin/style-responsive.css") }}" rel="stylesheet" />
        @yield("stylesheets")
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
        <script src="{{ asset("js/admin/html5shiv.js") }}"></script>
        <script src="{{ asset("js/admin/respond.min.js") }}"></script>
        <script src="{{ asset("js/admin/lte-ie7.js") }}"></script>
        <![endif]-->
    </head>
    <body>
        <section id="container" class="">
            <header class="header white-bg">
                <a href="/admin" class="logo">
                    i<span class="lite">Muzik</span>
                </a>
                <div class="top-nav notification-row">
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="username">{{ auth()->user()->name }}</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li class="eborder-top">
                                    <a href="#">
                                        <i class="icon_profile"></i>
                                        {{ __("admins.layout.top_nav.my_profile") }}
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/logout">
                                        <i class="icon_key_alt"></i>
                                        {{ __("admins.layout.top_nav.logout") }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </header>
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <ul class="sidebar-menu">
                        <li>
                            <a href="{{ route("dashboards.index") }}">
                                <i class="icon_house_alt"></i>
                                <span>{{ __("admins.layout.sidebar.dashboard") }}</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ active_submenu(["admin/albums"]) }}">
                            <a href="#">
                                <i class="icon_book_alt"></i>
                                <span>{{ __("admins.layout.sidebar.album") }}</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a href="{{ route("albums.index") }}">
                                        <i class="icon_menu"></i>
                                        {{ __("admins.layout.sidebar.list") }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon_tag_alt"></i>
                                        {{ __("admins.layout.sidebar.new") }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">
                                <i class="icon_music"></i>
                                <span>{{ __("admins.layout.sidebar.song") }}</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a href="#">
                                        <i class="icon_menu"></i>
                                        {{ __("admins.layout.sidebar.list") }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon_tag_alt"></i>
                                        {{ __("admins.layout.sidebar.new") }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon_cogs"></i>
                                <span>{{ __("admins.layout.sidebar.configuration") }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    @yield("content")
                </section>
            </section>
        </section>
        <script src="{{ asset("js/jquery.js") }}"></script>
        <script src="{{ asset("js/admin/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/admin/jquery.scrollTo.min.js") }}"></script>
        <script src="{{ asset("js/admin/jquery.nicescroll.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/admin/scripts.js") }}"></script>
        @yield("javascripts")
    </body>
</html>
