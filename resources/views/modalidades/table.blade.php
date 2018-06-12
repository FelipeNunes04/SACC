<table class="table table-responsive" id="modalidades-table">
    <thead>
        <tr>
            <th>Idmodalidades</th>
        <th>Descricao</th>
        <th>Carga Maxima</th>
        <th>Carga Efetuada</th>
        <th>Carga Ganha</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($modalidades as $modalidades)
        <tr>
            <td>{!! $modalidades->idmodalidades !!}</td>
            <td>{!! $modalidades->descricao !!}</td>
            <td>{!! $modalidades->carga_maxima !!}</td>
            <td>{!! $modalidades->carga_efetuada !!}</td>
            <td>{!! $modalidades->carga_ganha !!}</td>
            <td>
                {!! Form::open(['route' => ['modalidades.destroy', $modalidades->idmodalidades], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('modalidades.show', [$modalidades->idmodalidades]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('modalidades.edit', [$modalidades->idmodalidades]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>