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
    <body class="login-img3-body">
        <div class="container">
            <form class="login-form" action="index.html">
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="icon_profile"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="{{ __("admins.sessions.index.email") }}" autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="icon_key_alt"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="{{ __("admins.sessions.index.password") }}">
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me">
                        {{ __("admins.sessions.index.remember_me") }}
                        <span class="pull-right">
                            <a href="#">{{ __("admins.sessions.index.forgot_password") }}</a>
                        </span>
                    </label>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                        {{ __("admins.sessions.index.login") }}
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>
