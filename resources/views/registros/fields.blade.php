       <input type="hidden" name="aluno" value="{{ Auth::user()->id }}">

<!-- Titulo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control','rows' => 4, 'cols' => 3]) !!}
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
    {!! Form::select('modalidade', $modalidades, ((isset($registros) && $registros->modalidade!=null) ? $registros->modalidade : ''), ['class' => 'form-control selectpicker', 'data-live-search' => 'true'] ) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('registros.index') !!}" class="btn btn-default">Cancel</a>
</div>
