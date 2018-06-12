<table class="table table-responsive" id="alunos-table">
    <thead>
        <tr>
        <th>Nome</th>
        <th>Matricula</th>
        <th>Email</th>
        <th>Contato</th>
        <th>Curso</th>
            <!--<th colspan="3">Action</th>-->
        </tr>
    </thead>
    <tbody>
    @foreach($alunos as $alunos)
        <tr>
            <td>{!! $alunos->name !!}</td>
            <td>{!! $alunos->matricula !!}</td>
            <td>{!! $alunos->email !!}</td>
            <td>{!! $alunos->contato !!}</td>
            <td>{!! $alunos->curso !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>