<table class="table table-responsive" id="cursos-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Carga</th>
        <th>Coordcurso</th>
        <th>Coordacc</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cursos as $curso)
        <tr>
            <td>{!! $curso->nome !!}</td>
            <td>{!! $curso->carga !!}</td>
            <td>{!! $curso->coordcurso !!}</td>
            <td>{!! $curso->coordacc !!}</td>
            <td>
                {!! Form::open(['route' => ['cursos.destroy', $curso->idcurso], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cursos.show', [$curso->idcurso]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cursos.edit', [$curso->idcurso]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>