<table class="table table-responsive" id="coordCursos-table">
    <thead>
        <tr>
            <th>Siape</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Contato</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($coordCursos as $coordCurso)
        <tr>
            <td>{!! $coordCurso->siape !!}</td>
            <td>{!! $coordCurso->nome !!}</td>
            <td>{!! $coordCurso->email !!}</td>
            <td>{!! $coordCurso->contato !!}</td>
            <td>
                {!! Form::open(['route' => ['coordCursos.destroy', $coordCurso->idcoordcurso], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('coordCursos.show', [$coordCurso->idcoordcurso]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('coordCursos.edit', [$coordCurso->idcoordcurso]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>