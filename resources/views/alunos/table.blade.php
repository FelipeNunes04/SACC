<table class="table table-responsive" id="alunos-table">
    <thead>
        <tr>
            <th>Matricula</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Contato</th>
        <th>Curso</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alunos as $alunos)
        <tr>
            <td>{!! $alunos->matricula !!}</td>
            <td>{!! $alunos->nome !!}</td>
            <td>{!! $alunos->email !!}</td>
            <td>{!! $alunos->contato !!}</td>
            <td>{!! $alunos->curso !!}</td>
            <td>
                {!! Form::open(['route' => ['alunos.destroy', $alunos->idalunos], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alunos.show', [$alunos->idalunos]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alunos.edit', [$alunos->idalunos]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>