<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Carga Horaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carga_horaria', 'Carga Horaria:') !!}
    {!! Form::number('carga_horaria', null, ['class' => 'form-control']) !!}
</div>

<!-- Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio', 'Inicio:') !!}
    {!! Form::date('inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fim', 'Fim:') !!}
    {!! Form::date('fim', null, ['class' => 'form-control']) !!}
</div>

<!-- Modalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modalidade', 'Modalidade:') !!}
    {!! Form::number('modalidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Aluno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aluno', 'Aluno:') !!}
    {!! Form::number('aluno', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('registros.index') !!}" class="btn btn-default">Cancel</a>
</div>
