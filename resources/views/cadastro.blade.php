<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SACC - SISTEMA DE CONTROLE DE ACCS</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

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
                                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome Completo">
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
                                                    <input type="password" class="form-control" name="password" placeholder="Senha">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                                    @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirma Senha">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                                    @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-feedback{{ $errors->has('matricula') ? ' has-error' : '' }}">
                                                    <input type="text" class="form-control" name="matricula" value="{{ old('matricula') }}" placeholder="{{ $tipo==2 || $tipo==3 ? 'SUAP' : 'Matricula' }}">
                                                    <span class="glyphicon glyphicon-blackboard form-control-feedback"></span>

                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('matricula') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-feedback{{ $errors->has('contato') ? ' has-error' : '' }}">
                                                    <input type="text" class="form-control" name="contato" value="{{ old('contato') }}" placeholder="Telefone">
                                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>

                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('contato') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-feedback{{ $errors->has('curso') ? ' has-error' : '' }}">
                                                    {!! Form::select('curso', $cursos, '', ['class' => 'form-control selectpicker', 'data-live-search' => 'true'] ) !!}
                                                    <span class="glyphicon glyphicon-scale form-control-feedback"></span>

                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('curso') }}</strong>
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