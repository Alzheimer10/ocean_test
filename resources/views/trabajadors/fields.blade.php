<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula', 'Cedula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo', 'Cargo:') !!}
    {!! Form::select('cargo', ['PROGRAMADOR' => 'PROGRAMADOR', 'ABOGADO' => ' ABOGADO', 'DISEÑADOR' => 'DISEÑADOR', 'COORDINADOR' => 'COORDINADOR', 'FOTOGRAFO' => 'FOTOGRAFO', 'OTROS' => 'OTROS'], null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'pattern' => '[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('activo', 'Activo:') !!}
    <label class="radio-inline">
        {!! Form::radio('activo', "SI", null) !!} SI
    </label>

    <label class="radio-inline">
        {!! Form::radio('activo', "NO", null) !!} NO
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('trabajadors.index') !!}" class="btn btn-default">CANCELAR</a>
</div>
