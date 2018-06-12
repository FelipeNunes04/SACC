@if (!(Auth::guest()) && (Auth::user()->tipo==1))
    <li class="{{ Request::is('registros*') ? 'active' : '' }}">
        <a href="{!! route('registros.index') !!}"><i class="fa fa-edit"></i><span>Registros</span></a>
    </li>
@elseif (!(Auth::guest()) && (Auth::user()->tipo==2))
    <li class="{{ Request::is('modalidades*') ? 'active' : '' }}">
        <a href="{!! route('modalidades.index') !!}"><i class="fa fa-edit"></i><span>Modalidades</span></a>
    </li>

    <li class="{{ Request::is('registros*') ? 'active' : '' }}">
        <a href="{!! route('registros.index') !!}"><i class="fa fa-edit"></i><span>Registros</span></a>
    </li>
@elseif (!(Auth::guest()) && (Auth::user()->tipo==3))
    <li class="{{ Request::is('alunos*') ? 'active' : '' }}">
        <a href="{!! route('alunos.index') !!}"><i class="fa fa-edit"></i><span>Alunos</span></a>
    </li>

    <li class="{{ Request::is('cursos*') ? 'active' : '' }}">
        <a href="{!! route('cursos.index') !!}"><i class="fa fa-edit"></i><span>Cursos</span></a>
    </li>
@else
    <li class="{{ Request::is('coordAccs*') ? 'active' : '' }}">
        <a href="{!! route('coordAccs.index') !!}"><i class="fa fa-edit"></i><span>Coord Accs</span></a>
    </li>

    <li class="{{ Request::is('coordCursos*') ? 'active' : '' }}">
        <a href="{!! route('coordCursos.index') !!}"><i class="fa fa-edit"></i><span>Coord Cursos</span></a>
    </li>

    <li class="{{ Request::is('alunos*') ? 'active' : '' }}">
        <a href="{!! route('alunos.index') !!}"><i class="fa fa-edit"></i><span>Alunos</span></a>
    </li>

    <li class="{{ Request::is('cursos*') ? 'active' : '' }}">
        <a href="{!! route('cursos.index') !!}"><i class="fa fa-edit"></i><span>Cursos</span></a>
    </li>

    <li class="{{ Request::is('modalidades*') ? 'active' : '' }}">
        <a href="{!! route('modalidades.index') !!}"><i class="fa fa-edit"></i><span>Modalidades</span></a>
    </li>

    <li class="{{ Request::is('registros*') ? 'active' : '' }}">
        <a href="{!! route('registros.index') !!}"><i class="fa fa-edit"></i><span>Registros</span></a>
    </li>
@endif
