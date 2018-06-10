<table class="table table-responsive" id="alunos-table">
    <thead>
        <tr>
            <th>Matricula</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Curso</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alunos as $alunos)
        <tr>
            <td>{!! $alunos->matricula !!}</td>
            <td>{!! $alunos->nome !!}</td>
            <td>{!! $alunos->email !!}</td>
            <td>{!! $alunos->telefone !!}</td>
            <td>{!! $alunos->curso !!}</td>
            <td>{!! $alunos->status !!}</td>
            <td>
                {!! Form::open(['route' => ['alunos.destroy', $alunos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alunos.show', [$alunos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alunos.edit', [$alunos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>