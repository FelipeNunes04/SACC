<!-- Idmodalidades Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmodalidades', 'Idmodalidades:') !!}
    {!! Form::number('idmodalidades', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Carga Maxima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carga_maxima', 'Carga Maxima:') !!}
    {!! Form::number('carga_maxima', null, ['class' => 'form-control']) !!}
</div>

<!-- Carga Efetuada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carga_efetuada', 'Carga Efetuada:') !!}
    {!! Form::number('carga_efetuada', null, ['class' => 'form-control']) !!}
</div>

<!-- Carga Ganha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carga_ganha', 'Carga Ganha:') !!}
    {!! Form::number('carga_ganha', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('modalidades.index') !!}" class="btn btn-default">Cancel</a>
</div>
