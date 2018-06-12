<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Carga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carga', 'Carga:') !!}
    {!! Form::number('carga', null, ['class' => 'form-control']) !!}
</div>

<!-- Coordcurso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordcurso', 'Coordcurso:') !!}
    {!! Form::number('coordcurso', null, ['class' => 'form-control']) !!}
</div>

<!-- Coordacc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordacc', 'Coordacc:') !!}
    {!! Form::number('coordacc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cursos.index') !!}" class="btn btn-default">Cancel</a>
</div>
