<table class="table table-responsive" id="coordAccs-table">
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
    @foreach($coordAccs as $coordAcc)
        <tr>
            <td>{!! $coordAcc->siape !!}</td>
            <td>{!! $coordAcc->nome !!}</td>
            <td>{!! $coordAcc->email !!}</td>
            <td>{!! $coordAcc->contato !!}</td>
            <td>
                {!! Form::open(['route' => ['coordAccs.destroy', $coordAcc->idcoordacc], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('coordAccs.show', [$coordAcc->idcoordacc]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('coordAccs.edit', [$coordAcc->idcoordacc]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>