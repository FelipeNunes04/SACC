<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SACC - SISTEMA DE CONTROLE DE ACCS</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/JeffreyNaval/pen/RRrVmo?limit=all&page=19&q=nav+tabs" />

        <style class="cp-pen-styles">
            html, body {
                background: #f1f1f1;
            }

            body {
                margin-top: 60px;
            }

            .fa-btn {
                margin-right: 5px;
            }

            .panel.tab-pane {
                border-top: none;
                border-radius: 0 0 4px 4px;
            }

            .pagination {
                margin-top: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#login" aria-controls="home" role="tab" data-toggle="tab">
                                <span class="fa fa-lock"></span> Login
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#cadastro" aria-controls="home" role="tab" data-toggle="tab">
                                <span class="fa fa-group"></span> Cadastro
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active panel panel-default" id="login">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{ url('/login') }}">
                                                {!! csrf_field() !!}

                                                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <input type="password" class="form-control" placeholder="Senha" name="password">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                    @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif

                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <div class="checkbox icheck">
                                                            <label>
                                                                <input type="checkbox" name="remember"> Lembre-se
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-xs-4">
                                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane panel panel-default" id="cadastro">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{ url('/register') }}">

                                                {!! csrf_field() !!}
                                                
                                                <input type="hidden" class="form-control" id="tipo" name="tipo" value="{{ $tipo }}">

                                                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                                    @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                                    @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <div class="checkbox icheck">
                                                            <label>
                                                                
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-xs-4">
                                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>