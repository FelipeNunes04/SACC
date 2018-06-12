<table class="table table-responsive" id="registros-table">
    <thead>
        <tr>
            <th>Titulo</th>
        <th>Descricao</th>
        <th>Carga Horaria</th>
        <th>Inicio</th>
        <th>Fim</th>
        <th>Modalidade</th>
        <th>Aluno</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($registros as $registros)
        <tr>
            <td>{!! $registros->titulo !!}</td>
            <td>{!! $registros->descricao !!}</td>
            <td>{!! $registros->carga_horaria !!}</td>
            <td>{!! $registros->inicio !!}</td>
            <td>{!! $registros->fim !!}</td>
            <td>{!! $registros->modalidade !!}</td>
            <td>{!! $registros->aluno !!}</td>
            <td>
                {!! Form::open(['route' => ['registros.destroy', $registros->idregistros], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('registros.show', [$registros->idregistros]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('registros.edit', [$registros->idregistros]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>